
<script>
	var photo = document.querySelector('.photo img');
	var toggle= document.querySelector('.toggle-controls');
	var n =0;
	var goL =document.querySelector('.goL');
	var goR =document.querySelector('.goR');
	toggle.children[0].classList.add('clickedimg')
	for(let i=0;i<toggle.children.length;i++){
		toggle.children[i].addEventListener('click',function(){
			photo.src = toggle.children[i].src;
			for(let j=0;j<toggle.children.length;j++){
				toggle.children[j].classList.remove('clickedimg')
			};
			toggle.children[i].classList.add('clickedimg')
			n=i;
		});	
	};
	goR.addEventListener('click',function(){
		if(n !== toggle.children.length-1){
			photo.src = toggle.children[n+1].src;
			for(let j=0;j<toggle.children.length;j++){
				toggle.children[j].classList.remove('clickedimg')
			};
			toggle.children[n+1].classList.add('clickedimg')
			n++
		}
	})
	goL.addEventListener('click',function(){
		if(n !== 0){
			photo.src = toggle.children[n-1].src;
			for(let j=0;j<toggle.children.length;j++){
				toggle.children[j].classList.remove('clickedimg')
			};
			toggle.children[n-1].classList.add('clickedimg')
			n--
		}
	})
</script>