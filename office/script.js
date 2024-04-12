(function () {

  //Renderer
  let renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.body.appendChild(renderer.domElement);

  //Scene
  let scene = new THREE.Scene();

  //Camera
  let camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
  camera.position.set(280, 200, 0);
  camera.lookAt(new THREE.Vector3(0, 0, 0));

  //Mesh
  let mesh;
  const meshUrl = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1678849/room.js';
  const textureUrl = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1678849/map.jpg';
  const texture = new THREE.TextureLoader().load(textureUrl);
  texture.anisotropy = 8; // Mmm Crisp Textures
  const material = new THREE.MeshBasicMaterial({ map: texture });
  const MeshLoader = new THREE.JSONLoader().load(meshUrl, geometry => {
    mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);
  });

  //Light - Set to white because lighting and shadows are already baked into the texture
  const ambientLight = new THREE.AmbientLight(0xffffff);
  scene.add(ambientLight);

  //Render
  function render() {
    requestAnimationFrame(render);
    if (mesh) {
      mesh.rotation.y += 0.005; //Less Dizzying Jason?
    }
    renderer.render(scene, camera);
  }

  render();

})();