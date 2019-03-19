<style>
div{
   height: 40px;/*altura*/
   /*border: 1px solid silver;*/
   }
   .nota{
    width:50px;/*largura*/
    }
    label{
      font-weight: bold;/*negrito*/
    }
    </style>
<form action="controledeNota.php" method= "get">
   <div>
   <label>Ano</label>
   <input type="text" name="ano">
   </div>
   <div>
   <label>Aluno</label>
   <input type="text" name="aluno">
   </div>
   <div>
   <label>Nota1</label>
   <input class="nota" type="text" name="n1">
   </div>
   <div>
   <label>Nota2</label>
   <input class="nota" type="text" name="n2">
   </div> 
   <div>
   <label>Nota3</label>
   <input class="nota" type="text" name="n3">
   </div>
   <div>
   <label>Nota4</label>
   <input class="nota" type="text" name="n4">
   </div>
	<input type="submit" value="CALCULAR">
	<input type="reset" value="Limpar">
   </form>