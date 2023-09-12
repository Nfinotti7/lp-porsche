//	build scene


function init () {
  let loaded=0;
  let numberofImages = 51;// ALTERAR AQUI!!!!!!!!!!!!!!!!
  const viewer = document.querySelector('.viewer');
  const initialImage = document.querySelector('.initial_image');
  const loader = document.querySelector('h2 span');
  let images = [];
  for(let i=1;i<=numberofImages;++i){
	  const img = new Image();
	  img.src=        `sto/sto (${(''+i).slice(-3)}).jpg`;// ALTERAR AQUI!!!!!!!!!!!!!!!!
	  img.onload = () => {
      loader.innerText =   `${Math.round(++loaded/numberofImages*100)}%`;
      if(loaded === numberofImages) {
        initialImage.style.display = 'none';
        viewer.style.display = 'block';
        initializeRotate(images);
      }
    }
    images.push(img);
	  viewer.appendChild(img);
  }
}

function initializeRotate(images){
  //	rotation handler
//	http://chrisbateman.github.io/impetus/
//	https://github.com/chrisbateman/impetus

  const threshold = 10;
  const total = images.length - 1;
  let frame = 0;
  const impetus = new Impetus({
    source: document.getElementById('viewer'),
    update(x) {
      images[frame].classList.remove('active')
      frame = Math.floor(-x / threshold) % total;
      frame = frame <= 0 ? total + frame : frame;
      images[frame].classList.add('active');
    }
  });
   images[frame].classList.add('active');
  //	cursor
  addEventListener('mousedown', e => document.body.style.cursor='grabbing');
  addEventListener('mouseup', e => document.body.style.cursor='grab');
}
  
init();