$(function() {
	const vertexShader = `
		//	Simplex 3D Noise
		//	by Ian McEwan, Ashima Arts
		//
		vec4 permute(vec4 x) {
		  return mod(((x * 34.0) + 1.0) * x, 289.0);
		}
		vec4 taylorInvSqrt(vec4 r) {
		  return 1.79284291400159 - 0.85373472095314 * r;
		}

		float snoise(vec3 v) {
		  const vec2 C = vec2(1.0 / 6.0, 1.0 / 3.0);
		  const vec4 D = vec4(0.0, 0.5, 1.0, 2.0);

		  // First corner
		  vec3 i = floor(v + dot(v, C.yyy));
		  vec3 x0 = v - i + dot(i, C.xxx);

		  // Other corners
		  vec3 g = step(x0.yzx, x0.xyz);
		  vec3 l = 1.0 - g;
		  vec3 i1 = min(g.xyz, l.zxy);
		  vec3 i2 = max(g.xyz, l.zxy);

		  //  x0 = x0 - 0. + 0.0 * C
		  vec3 x1 = x0 - i1 + 1.0 * C.xxx;
		  vec3 x2 = x0 - i2 + 2.0 * C.xxx;
		  vec3 x3 = x0 - 1. + 3.0 * C.xxx;

		  // Permutations
		  i = mod(i, 289.0);
		  vec4 p = permute(permute(permute(
		        i.z + vec4(0.0, i1.z, i2.z, 1.0)) +
		      i.y + vec4(0.0, i1.y, i2.y, 1.0)) +
		    i.x + vec4(0.0, i1.x, i2.x, 1.0));

		  // Gradients
		  // ( N*N points uniformly over a square, mapped onto an octahedron.)
		  float n_ = 1.0 / 7.0; // N=7
		  vec3 ns = n_ * D.wyz - D.xzx;

		  vec4 j = p - 49.0 * floor(p * ns.z * ns.z); //  mod(p,N*N)

		  vec4 x_ = floor(j * ns.z);
		  vec4 y_ = floor(j - 7.0 * x_); // mod(j,N)

		  vec4 x = x_ * ns.x + ns.yyyy;
		  vec4 y = y_ * ns.x + ns.yyyy;
		  vec4 h = 1.0 - abs(x) - abs(y);

		  vec4 b0 = vec4(x.xy, y.xy);
		  vec4 b1 = vec4(x.zw, y.zw);

		  vec4 s0 = floor(b0) * 2.0 + 1.0;
		  vec4 s1 = floor(b1) * 2.0 + 1.0;
		  vec4 sh = -step(h, vec4(0.0));

		  vec4 a0 = b0.xzyw + s0.xzyw * sh.xxyy;
		  vec4 a1 = b1.xzyw + s1.xzyw * sh.zzww;

		  vec3 p0 = vec3(a0.xy, h.x);
		  vec3 p1 = vec3(a0.zw, h.y);
		  vec3 p2 = vec3(a1.xy, h.z);
		  vec3 p3 = vec3(a1.zw, h.w);

		  //Normalise gradients
		  vec4 norm = taylorInvSqrt(vec4(dot(p0, p0), dot(p1, p1), dot(p2, p2), dot(p3, p3)));
		  p0 *= norm.x;
		  p1 *= norm.y;
		  p2 *= norm.z;
		  p3 *= norm.w;

		  // Mix final noise value
		  vec4 m = max(0.6 - vec4(dot(x0, x0), dot(x1, x1), dot(x2, x2), dot(x3, x3)), 0.0);
		  m = m * m;
		  return 42.0 * dot(m * m, vec4(dot(p0, x0), dot(p1, x1),
		    dot(p2, x2), dot(p3, x3)));
		}


		uniform float u_time;
		uniform vec3 u_bg;
		uniform vec3 u_color[3];

		varying vec2 v_uv;
		varying vec3 v_color;
		varying vec3 v_position;

		void main() {

			vec2 noiseCoord = uv * vec2(3.3, 3.3);

			float tilt = 0.0 * uv.y;
			float incline = 0.0 * uv.x;

			float noise = snoise(vec3(noiseCoord.x, noiseCoord.y, u_time * 0.1));

			// noise = max(0.2, noise);

			vec3 pos = vec3( position.x, position.y, position.z + tilt + incline );


			v_color = u_bg;


			for(int i = 0; i < 2; i++){


				float noiseFlow = 5.0 + float(i) * 5.3;
				float noiseFlowy = 3.0 + float(i) * 0.3;
				float noiseSpeed = 10.0 + float(i) * 0.1;
				float noiseSeed = 3.0 + float(i) * 10.0;
				vec2 noiseFreq = vec2(0.4, 0.3);


				float noiseFloor = 0.1;
				float noiseCeil = 0.6 + float(i) * 0.19;


				float noise = smoothstep(noiseFloor, noiseCeil, snoise(vec3(
					noiseCoord.x * noiseFreq.x + u_time * 0.002 * noiseFlow,
					noiseCoord.y * noiseFreq.y + u_time * 0.003 * noiseFlowy,
					u_time * 0.008 * noiseSpeed + noiseSeed
				)));


				v_color = mix(v_color, u_color[i], noise);

			}


			v_uv = uv;

		  gl_Position = projectionMatrix * modelViewMatrix * vec4( pos, 1.0 );
		}
	`;

	const fragmentShader = `
		uniform vec2 u_resolution;
		uniform vec2 u_mouse;

		varying vec2 v_uv;
		varying vec3 v_color;
		varying vec3 v_position;

		void main() {
		  // vec2 st = gl_FragCoord.xy / u_resolution.xy;

		  gl_FragColor = vec4(v_uv, 0.0, 1.000);
		  gl_FragColor = vec4(v_color, 1.000);
		}
	`;



	const getSize = () => ({
		width: $("#assetWrap").innerWidth,
		height: $("#assetWrap").innerHeight
	});

	const renderer = new THREE.WebGLRenderer({
		antialising: true,
		alpha: false,
		canvas: undefined
	});


	const scene = new THREE.Scene();

	const clock = new THREE.Clock();

	const { width, height } = getSize();


	const camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, .001, 1e3);
	camera.position.set(0, 0, .5);


	let _c = new THREE.Color("#FFFFFF");


	renderer.setPixelRatio(window.devicePixelRatio);
	renderer.setSize(width, height);

	const geometry = new THREE.PlaneGeometry(3, 2, 100, 100);

	let uniforms = {
		u_time: { type: "f", value: 1.0 },
		u_resolution: { type: "v2", value: new THREE.Vector2() },
		u_mouse: { type: "v2", value: new THREE.Vector2() },
		u_bg: { value: _c },
		u_color: {
			value:[
				new THREE.Color("#F4F3DC"),
				new THREE.Color("#F4F3DC"),
				new THREE.Color("#F4F3DC")
			]
		},
	};

	let material = new THREE.ShaderMaterial({
		// wireframe: true,
		uniforms: uniforms,
		vertexShader: vertexShader,
		fragmentShader: fragmentShader
	});

	const mesh = new THREE.Mesh(geometry, material);
	scene.add(mesh);

	document.onmousemove = function(e) {
		uniforms.u_mouse.value.x = e.pageX;
		uniforms.u_mouse.value.y = e.pageY;
	};

	window.addEventListener("resize", onWindowResize, false);

	onWindowResize();

	function onWindowResize() {
		var _get_padding = $("#assetWrap").height();
		renderer.setSize(window.innerWidth, _get_padding);
		// renderer.setSize(window.innerWidth, window.innerHeight);
		uniforms.u_resolution.value.x = renderer.domElement.width;
		uniforms.u_resolution.value.y = renderer.domElement.height;
	}

	const update = () => {
		uniforms.u_time.value += clock.getDelta();
		renderer.render(scene, camera);
		requestAnimationFrame(update);
	};

	requestAnimationFrame(update);

	document.getElementById("app").appendChild(renderer.domElement);
})