<div class="modal fade" id="modalStats" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="titulomodal"></h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container">
               <div id="barDrilldown"></div>
            </div>
            <hr>
            <div class="container">
               <ul class="nav nav-tabs" id="myTab">
                  <li class="nav-item">
                     <button class="nav-link active" data-target="#cat1">Herbicidas</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-target="#cat2">Nematicidas</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-target="#cat3">T. semilla</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-target="#cat4">Insecticidas</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-target="#cat5">Fungicidas</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" data-target="#cat6">Acaricidas</button>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="cat1">
                     <div id="cat1x"></div>
                  </div>
                  <div class="tab-pane fade" id="cat2">
                     <div id="cat2x"></div>
                  </div>
                  <div class="tab-pane fade" id="cat3">                  
                     <div id="cat3x"></div>
                  </div>
                  <div class="tab-pane fade" id="cat4">                  
                     <div id="cat4x"></div>
                  </div>
                  <div class="tab-pane fade" id="cat5">                  
                     <div id="cat5x"></div>
                  </div>
                  <div class="tab-pane fade" id="cat6">                  
                     <div id="cat6x"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>