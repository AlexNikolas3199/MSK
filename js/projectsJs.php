<script>
	var body = document.querySelector('body');
	var footer = document.querySelector('footer');
	var moreInfo = document.querySelectorAll('.moreInfo');
	var projectInfo=document.querySelectorAll('.projectInfo');
	var cross =  document.querySelector('.cross');

	for(let i = 0 ; i <moreInfo.length;i++){
		moreInfo[i].classList.add('mapGoneL');
		cross.classList.add('goVEbenya');
		
		projectInfo[i].addEventListener('click',function(){
			for(let j=0;j<moreInfo.length;j++){
				moreInfo[j].classList.remove('mapCome');
			};
			moreInfo[i].classList.add('mapCome');
			cross.classList.remove('goVEbenya');
			cross.classList.add('mapCome');
			body.classList.remove('overVisible');
			body.classList.add('overHidden');
	})
	};
	for(let i = 0 ; i <moreInfo.length;i++){
		cross.addEventListener('click',function(){
			moreInfo[i].classList.remove('mapCome');
			moreInfo[i].classList.add('mapGoneL');
			cross.classList.remove('mapCome');
			cross.classList.add('goVEbenya');
			body.classList.remove('overHidden');
			body.classList.add('overVisible');
			
	})
	};
	var photo = document.querySelectorAll('.photo img');
	var toggle= document.querySelectorAll('.toggle-controls');
	var goL =document.querySelectorAll('.goL');
	var goR =document.querySelectorAll('.goR');
	var n =0;

for(let I=0;I<photo.length;I++){
	toggle[I].children[0].classList.add('clickedimg');
	for(let i=0;i<toggle[I].children.length;i++){
		toggle[I].children[i].addEventListener('click',function(){
			photo[I].src = toggle[I].children[i].src;
			for(let j=0;j<toggle[I].children.length;j++){
				toggle[I].children[j].classList.remove('clickedimg')
			};
			toggle[I].children[i].classList.add('clickedimg')
			n=i;
		});	
	};
	goR[I].addEventListener('click',function(){
		if(n !== toggle[I].children.length-1){
			photo[I].src = toggle[I].children[n+1].src;
			for(let j=0;j<toggle[I].children.length;j++){
				toggle[I].children[j].classList.remove('clickedimg')
			};
			toggle[I].children[n+1].classList.add('clickedimg')
			n++
		}
	})
	goL[I].addEventListener('click',function(){
		if(n !== 0){
			photo[I].src = toggle[I].children[n-1].src;
			for(let j=0;j<toggle[I].children.length;j++){
				toggle[I].children[j].classList.remove('clickedimg')
			};
			toggle[I].children[n-1].classList.add('clickedimg')
			n--
		}
	})
}
</script>