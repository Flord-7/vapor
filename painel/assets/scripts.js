function excluirjogo(idjogo){

    let excluirjogo = confirm("Realmente deseja excluir esse jogo?")

    if(excluirjogo == true){
        window.open("excluir-jogo.php?id=" + idjogo, "_SELF")
    }
}

// function removeErrorMessage(){
//     const errorMessage = document.getElementById("error-message")

//     if(errorMessage != null){
//         errorMessage.remove()
//     }
// }

function removerElementoPorId(idElemento){
    let elemento = document.getElementById(idElemento)
    if(elemento != null){
        elemento.remove()
    }
}



function obterHoraAtual(){
  const data = new Date()
  let hora = data.getHours()
  let minuto = data.getMinutes()
  let segundos = data.getSeconds()
  let dia = data.getDate()
  let mes = data.getMonth()
  let ano = data.getFullYear()

  if(dia < 10){
    dia = "0"+ dia
  }
  if(mes < 10){
    mes = "0"+ mes
  }  
  if(hora < 10){
   hora = "0" + hora 
  }
  if(minuto < 10 ){
    minuto = "0" + minuto
  }
  if(segundos < 10 ){
    segundos = "0" + segundos
  }

  let dataAtual = dia +"/" + (mes+1) + "/" + ano + " - " + hora + ":" + minuto + ":" + segundos
  return dataAtual
}

let dataHora = obterHoraAtual()
console.log(dataHora)


