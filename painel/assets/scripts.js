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



function obterDataHoraAtual(){
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

function updateClock(){
  const clock = document.getElementById('clock')

  clock.innerHTML = obterDataHoraAtual()

  setInterval(function (){
    clock.innerHTML = obterDataHoraAtual()
  },1000)
}

// function numberAleatorio(max){
//   return Math.floor(Math.random() * max)
// }
// function colorAleatorio(){
//   let numeroAleatorio = numberAleatorio(3)
//   let azul = "0"
//   let vermelho = "1"
//   let amarelo = "2"

//   if(numeroAleatorio == azul){
//     document.getElementById('mensagem').style.color = "blue"
//     document.getElementById('nome').style.color = "blue"

//   }
  
//   if(numeroAleatorio == vermelho){
//     document.getElementById('mensagem').style.color = "red"
//     document.getElementById('nome').style.color = "red"

//   }
  
//   if(numeroAleatorio == amarelo){
//     document.getElementById('mensagem').style.color = "yellow"
//     document.getElementById('nome').style.color = "yellow"
//   }
// }

// function atualizarCor(){
//   setInterval(function(){
//     colorAleatorio()
//   }, 1000 )
// }


function cor_aleatoria(){
  const r = Math.floor(Math.random() * 256)
  const g = Math.floor(Math.random() * 256)
  const b = Math.floor(Math.random() * 256)
  const cor = "rgb(" + r + "," + g + "," + b + ")"

  document.getElementById("nome").style.color = cor
  document.getElementById("mensagem").style.color = cor
}
function iniciar_mudanca_de_cor(){
  setInterval(cor_aleatoria, 1000)
}

function transformar_texto_maiusculo(elemento){
  let valor_que_usuario_digitou = elemento.value
  elemento.value = (valor_que_usuario_digitou.toUpperCase())
}


function apenas_pri_letra(elemento){
  const valor_do_usuario = elemento.value
  elemento.value = valor_do_usuario[0].toUpperCase() + valor_do_usuario.slice(1).toLowerCase()
}


// https://acervolima.com/como-gerar-um-numero-aleatorio-em-determinado-intervalo-usando-javascript/




