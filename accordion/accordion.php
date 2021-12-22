<button class="accordion">Table des matières</button>
<div class="panel">
    <ul class="toc_list">
        <li><a href="#reseau_presentation"><span class="toc_number toc_depth_1">1.</span> Présentation</a></li>
        <li><a href="#Résoudre_les_problèmes_de_la_découverte_du_réseau"><span class="toc_number toc_depth_1">2.</span> Résoudre les problèems de découverte du réseau</a></li>
        <li><a href="#cas_des_vieux_NAS_ou_versions_de_Windows"><span class="toc_number toc_depth_1">3.</span> Comment appliquer le partage SMB dans Windows 10 Pro ?</a></li>
    </ul>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>