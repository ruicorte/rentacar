<form role="form" class="form" method="POST">
   <div class="col-xs-12">
      <div class="form-group">
        <div class="input-group">       
          <span class="input-group-btn">
            <select name="criterio_search" class="btn btn-default">
              <option value="modelo">Modelo</option>
              <option value="matricula">Matrícula</option>
              <option value="fabricante">Fabricante</option>
           </select>
         </span>
         <input name="termo_search" type="text" class="form-control" placeholder="Termo de pesquisa">
         <div class="input-group-btn">
           <button name="submit_search" type="submit" class="btn btn-primary" >Pesquisa</button>
         </div>
       </div>
     </div>
   </div>
 </form>