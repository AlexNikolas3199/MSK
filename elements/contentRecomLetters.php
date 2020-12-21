<style>
	.doc img{
		width: 170px
	}
	.heading:before,
	.heading:after{
		border: solid #eee;
		border-width: 0 10px;

	}
</style>
<section class="textContent">
<div class="flex_center">
<div class="doc">
		<img class="print"src="images/listPen.png" alt="">
		<img src="images/грамота_куба_мск.jpg" alt="">
	</div>
	<div class="doc">
		<img class="print"src="images/listPen.png" alt="">
		<img src="images/благодарность_от_ПС.jpg" alt="">
	</div>
	<div class="doc">
		<img class="print"src="images/listPen.png" alt="">
		<img src="images/letters/thx_bn_gymnasia36.jpg" alt="">
	</div>
</div>
</section>
<div class="chosendoc">
	<div>
		<img class="docphoto" src="images/letters/thx_bn_sorokin2.jpg" alt="">
		<div class="goL"><div></div></div>
		<div class="goR"><div></div></div>
		<div class="docout">
			<img src="images/cross.png" alt="">
		</div>
	</div>
</div>
<script>
	var body =document.querySelector('body');
	var docbox = document.querySelector('.flex_center');
	var docAll = docbox.querySelectorAll('.doc');
	var chosendoc= document.querySelector('.chosendoc');
	chosendoc.classList.add('dispNone');
	var docphoto =chosendoc.querySelector('.docphoto');
	var docout = chosendoc.querySelector('.docout');
	var goL =chosendoc.querySelector('.goL');
	var goR =chosendoc.querySelector('.goR');
	var n = 0;
	for(let i=0;i<docAll.length;i++){
		docAll[i].addEventListener('click',function(){
			docphoto.src = docAll[i].querySelector('img:last-of-type').src;
			chosendoc.classList.remove('dispNone');
			chosendoc.classList.add('dispflex');
			body.style.overflow = 'hidden';
			n=i;
		});	
	};
	docout.addEventListener('click',function(){
			chosendoc.classList.remove('dispflex');
			chosendoc.classList.add('dispNone');
			body.style.overflow = 'visible';
	});
	goR.addEventListener('click',function(){
	if(n !== docAll.length-1){
		docphoto.src = docAll[n+1].querySelector('img:last-of-type').src;
		n++
		}
	})
	goL.addEventListener('click',function(){
		if(n !== 0){
			docphoto.src = docAll[n-1].querySelector('img:last-of-type').src;
			n--
		}
	})
</script>