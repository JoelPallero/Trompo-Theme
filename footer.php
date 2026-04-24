<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hello-trompo
 */
?>

<!-- FOOTER -->
<footer>
  <div class="f-brand">
    <div class="f-logo">
      <img src="https://bodegaslopez.com.ar/wp-content/uploads/2019/05/logoloder-1.png"
           onerror="this.style.display='none'" alt="Bodegas López">
    </div>
    <div class="f-name">Bodegas López</div>
    <div class="f-since">Est. 1898 · Maipú, Mendoza</div>
    <div class="f-addr">Ozamis Norte 375, General Gutiérrez<br>Maipú, Mendoza, Argentina<br>+54 261 497-2406</div>
  </div>
  <div>
    <div class="f-col-title">La Bodega</div>
    <div class="f-links">
      <a href="https://bodegaslopez.com.ar/historia/" target="_blank">Historia</a>
      <a href="https://bodegaslopez.com.ar/infraestructura-y-elaboracion/" target="_blank">Infraestructura</a>
      <a href="https://bodegaslopez.com.ar/premios-y-distinciones/" target="_blank">Premios</a>
      <a href="https://bodegaslopez.com.ar/videos/" target="_blank">Videos</a>
    </div>
  </div>
  <div>
    <div class="f-col-title">Los Vinos</div>
    <div class="f-links">
      <a href="https://bodegaslopez.com.ar/clasicos/#montchenot" target="_blank">Montchenot</a>
      <a href="https://bodegaslopez.com.ar/clasicos/#cv" target="_blank">Chateau Vieux</a>
      <a href="https://bodegaslopez.com.ar/clasicos/#fl" target="_blank">Federico López</a>
      <a href="https://bodegaslopez.com.ar/ultima-generacion/#tr" target="_blank">Traful</a>
      <a href="https://www.instagram.com/universoparalelowines/" target="_blank">Universo Paralelo</a>
    </div>
  </div>
  <div>
    <div class="f-col-title">Visitas</div>
    <div class="f-links">
      <a href="https://experiencias.bodegaslopez.com.ar" target="_blank">Experiencias</a>
      <a href="https://bodegaslopez.com.ar/restaurant/" target="_blank">Restaurant</a>
      <a href="https://bodegaslopez.com.ar/clinica-de-reencorche/" target="_blank">Clínica Reencorche</a>
      <a href="https://bodegaslopez.com.ar/contacto/" target="_blank">Contacto</a>
    </div>
    <div style="margin-top:24px;">
      <div class="f-legal"><p>© <?php echo esc_html(date('Y')); ?> Bodegas López S.A.<br>Todos los derechos reservados.<br><br>Beber con moderación.<br>Prohibida la venta a<br>menores de 18 años.</p></div>
    </div>
  </div>
</footer>

<script>
// Cursor
const cur=document.getElementById('cur'),curR=document.getElementById('cur-r');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',e=>{mx=e.clientX;my=e.clientY;cur.style.left=mx+'px';cur.style.top=my+'px';});
(function loop(){rx+=(mx-rx)*.12;ry+=(my-ry)*.12;curR.style.left=rx+'px';curR.style.top=ry+'px';requestAnimationFrame(loop);})();
document.querySelectorAll('a,button,.line-card,.prod-card,.exp-card').forEach(el=>{
  el.addEventListener('mouseenter',()=>{cur.style.width='13px';cur.style.height='13px';curR.style.width='52px';curR.style.height='52px';});
  el.addEventListener('mouseleave',()=>{cur.style.width='8px';cur.style.height='8px';curR.style.width='36px';curR.style.height='36px';});
});

// Nav scroll
const nav=document.getElementById('nav');
window.addEventListener('scroll',()=>{nav.classList.toggle('scrolled',window.scrollY>20);},{passive:true});

// Scroll reveal
const obs=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('on');}),{threshold:.08,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.sr').forEach(el=>obs.observe(el));

// Counter
const cObs=new IntersectionObserver(entries=>{
  entries.forEach(entry=>{
    if(!entry.isIntersecting)return;
    const el=entry.target;
    const num=parseInt(el.textContent.replace(/\D/g,''));
    if(!isNaN(num)&&num>0){
      let c=0;
      const step=()=>{c+=num/55;el.textContent=Math.min(Math.round(c),num);if(Math.round(c)<num)requestAnimationFrame(step);};
      requestAnimationFrame(step);
    }
    cObs.unobserve(el);
  });
},{threshold:.5});
document.querySelectorAll('.stat-n').forEach(n=>cObs.observe(n));

// Lazy images with fallback handling
document.querySelectorAll('img.lazy').forEach(img=>{
  img.addEventListener('load',()=>img.classList.add('loaded'));
  img.addEventListener('error',()=>img.classList.add('error'));
  if(img.complete)img.classList.add(img.naturalWidth>0?'loaded':'error');
});
</script>

<?php wp_footer(); ?>
</body>
</html>
