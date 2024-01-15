<div class="container">
   <div class="card disney">   
       <img class="title" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FFA0BEBAC1406D88929497501C84019EBBA1B018D3F7C4C3C829F1810A24AD6E/scale?width=600&aspectRatio=1.78&format=png" alt="" class="title"> 
 </div>
  
    <div class="card pixar">   
       <img class="title" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7F4E1A299763030A0A8527227AD2812C049CE3E02822F7EDEFCFA1CFB703DDA5/scale?width=600&aspectRatio=1.78&format=png" alt="" class="title"> 
 </div>
  
    <div class="card marvel">   
       <img class="title" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C90088DCAB7EA558159C0A79E4839D46B5302B5521BAB1F76D2E807D9E2C6D9A/scale?width=600&aspectRatio=1.78&format=png" alt="" class="title"> 
 </div>
  
    <div class="card starwars">   
       <img class="title" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/5A9416D67DC9595496B2666087596EE64DE379272051BB854157C0D938BE2C26/scale?width=600&aspectRatio=1.78&format=png" alt="" class="title"> 
 </div>
</div>

<script>
   document.querySelectorAll('.card').forEach(card => {
       card.addEventListener('click', () => {
           window.location.href = "<?php bloginfo('template_url') ?> /includes/BrandPage.php";
       });
   });
</script>