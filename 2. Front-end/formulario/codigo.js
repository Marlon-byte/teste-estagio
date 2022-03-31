
function InserirBeneficiario() {
  event.preventDefault();
  let nome = $("#nome").val();
  let date = $("#data").val();
  let doc = $("#doc").val();
  let sexo= $("#sexo").val();
  let sit= $("#situacao").val();
  let log= $("#log").val();
  let num= $("#num").val();
  let bairro= $("#bairro").val();
  let cidade= $("#cidade").val();
  let estado= $("#estado").val();
  let email= $("#email").val();
  let telefone= $("#tel").val();
  


  let hoje=new Date();
  let idade1=new Date(date);
  let ano=hoje.getFullYear()-idade1.getFullYear();
  let m=hoje.getMonth()- idade1.getMonth();
 
  if(ano<18)
  {
   alert("Menor de idade!");
  }
  else{
 
    $("#mytable" ).append(
      `<tr>
            <td>${nome}</td>
            <td>${date}</td>
            <td>${doc}</td>
            <td>${sexo}</td>
            <td>${sit}</td>
            <td>${log}</td>
            <td>${num}</td>
            <td>${bairro}</td>
            <td>${cidade}</td>
            <td>${estado}</td>
            <td>${email}</td>
            <td>${telefone}</td>

        </tr>`
    );
   
  }
 

}

