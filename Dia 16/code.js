var rodada = "X", jogador = "X", c = 0, vencedor = "", jx = 0, jo = 0, e = 0, iter = 0;
var tabuleiro = [0, 1, 2, 3, 4, 5, 6, 7, 8];
var tabuleiroSimbolo = [0, 1, 2, 3, 4, 5, 6, 7, 8];
var VsMaquina = false, inverter = false, p = 0;

var jogador1 = "X";
var jogador2 = "O";


//testes
var huPlayer = "P";
var aiPlayer = "C";
var round = 0;
var huCo = "X";
var aiCo = "O";

document.getElementById("x").classList.add("sombra-espessa");

//Lembrar de mudar o reset do botao

document.querySelectorAll('.quadrado').forEach(item => {
    item.addEventListener('click', event => {

        if (VsMaquina == true) {
            move(item, huPlayer, huCo);
        } else {
            JxJ(item);
        }
        console.log("clicked");
    })
})

function move(element, player, simbolo) {

    if (tabuleiro[element.id] != "P" && tabuleiro[element.id] != "C") {
        round++;
        console.log(element.id);
        document.getElementById(element.id).innerHTML = simbolo;
        tabuleiro[element.id] = player;
        tabuleiroSimbolo[element.id] = huCo;

        console.log(tabuleiro);

        if (venceu(tabuleiro, player)) {
            funcVencedor();
            return;
        } else if (round > 8) {
            empate();
            return;
        } else {

            //vez da maquina
            round++;
            var index = minimax(tabuleiro, aiPlayer).index;
            document.getElementById(index).innerHTML = aiCo;
            tabuleiro[index] = aiPlayer;
            tabuleiroSimbolo[index] = aiCo;
            console.log(tabuleiroSimbolo);
            console.log(tabuleiro);
            console.log(index);
            if (venceu(tabuleiro, aiPlayer)) {
                funcVencedor();
                return;
            } else if (round === 0) {
                empate();
                return;
            }
        }
    }

}

function JxJ(item) {

    console.log("Jogador Vs Jogador");
    c++;
    tabuleiro[item.id] = rodada;
    document.getElementById(item.id).innerHTML = rodada;

    console.log("jogador " + rodada);
    console.log(tabuleiro);

    if (venceu(tabuleiro, rodada)) {
        funcVencedor();
        return;
    } else if (c > 8) {
        empate();
        return;
    } else {
        trocaRodada();
    }
}

function reset() {
    round = 0;
    board = [0, 1, 2, 3, 4, 5, 6, 7, 8];
}


function funcVencedor() {

    var fim = document.getElementById("vencedor");
    var reiniciar = document.getElementById("reiniciar");

    if (VsMaquina == true) {
        if (aiCo == "O") {
            fim.classList.add("vencedorvermelho");
            reiniciar.classList.add("reiniciarvermelho");
        } else {
            fim.classList.remove("vencedorvermelho");
            reiniciar.classList.remove("reiniciarvermelho");
        }
        document.getElementById("vencedorTexto").innerHTML = "'" + aiCo + "' Venceu";
    } else {
        if (rodada == "O") {
            fim.classList.add("vencedorvermelho");
            reiniciar.classList.add("reiniciarvermelho");
        }
        document.getElementById("vencedorTexto").innerHTML = "'" + rodada + "' Venceu";
    }

    reiniciar.classList.add("reiniciar");
    document.getElementById("reiniciar").innerHTML = "Jogar Novamente";

    fim.classList.add("vencedor");
}

function reiniciar() {
    document.querySelectorAll('.quadrado').forEach(item => {
        item.innerHTML = "";
    })

    var fim = document.getElementById("vencedor");
    var reiniciar = document.getElementById("reiniciar");

    if (VsMaquina == true) {
        if (venceu(tabuleiroSimbolo, aiCo)) {
            rodada = aiCo;

        }
        else {
            rodada = huCo;
        }
    }

    //jxM
    if (rodada == "X" && venceu(tabuleiroSimbolo, rodada)) {
        fim.classList.remove("vencedorvermelho");
        reiniciar.classList.remove("reiniciarvermelho");
        jx++;
        document.getElementById("placar-x-numero").innerHTML = jx;
    } else if (rodada == "O" && venceu(tabuleiroSimbolo, rodada)) {
        fim.classList.remove("vencedor");
        jo++;
        document.getElementById("placar-o-numero").innerHTML = jo;
    }

    //JxJ
    if (rodada == "O" && venceu(tabuleiro, rodada)) {
        fim.classList.remove("vencedorvermelho");
        reiniciar.classList.remove("reiniciarvermelho");
        jo++;
        document.getElementById("placar-o-numero").innerHTML = jo;
    } else if (rodada == "X" && venceu(tabuleiro, rodada)) {
        fim.classList.remove("vencedor");
        jx++;
        document.getElementById("placar-x-numero").innerHTML = jx;
    }

    fim.classList.remove("vencedor");
    reiniciar.classList.remove("reiniciar");
    fim.classList.remove("vencedorpreto");
    reiniciar.classList.remove("reiniciarpreto");

    document.getElementById("vencedorTexto").innerHTML = "";
    document.getElementById("reiniciar").innerHTML = "";
    c = 0;
    tabuleiro = [0, 1, 2, 3, 4, 5, 6, 7, 8];
    reset();
    p++;
}

function empate() {
    var fim = document.getElementById("vencedor");
    var reiniciar = document.getElementById("reiniciar");

    document.getElementById("vencedorTexto").innerHTML = "Empate";
    document.getElementById("reiniciar").innerHTML = "Jogar Novamente";

    fim.classList.add("vencedor");
    reiniciar.classList.add("reiniciar");

    reiniciar.classList.add("reiniciarpreto");
    fim.classList.add("vencedorpreto");

    e++;
    document.getElementById("placar-empate-numero").innerHTML = e;
    reset();
}

//Troca de quem começa
var O = document.getElementById('o');
O.addEventListener('click', event => {
    if (c == 0 || round == 0) {
        if (VsMaquina == true) {
            trocaSimbolo();
        } else {
            rodada = "X";
            trocaRodada();
        }
        reset();
        limpaPlacar();
    }
})

var X = document.getElementById('x');
X.addEventListener('click', event => {
    if (c == 0 || round == 0) {
        if (VsMaquina == true) {
            trocaSimbolo();
        } else {
            rodada = "O";
            trocaRodada();
        }
        reset();
        limpaPlacar();
    }
})

function trocaRodada() {
    if (rodada == "X") {
        rodada = "O";
        document.getElementById("x").classList.remove("sombra-espessa");
        document.getElementById("x").classList.add("sombra-normal");
        document.getElementById("o").classList.add("sombra-espessa");
        document.getElementById("o").classList.remove("sombra-normal");
        jogador = "O";
    } else {
        rodada = "X";
        document.getElementById("o").classList.remove("sombra-espessa");
        document.getElementById("o").classList.add("sombra-normal");
        document.getElementById("x").classList.add("sombra-espessa");
        document.getElementById("x").classList.remove("sombra-normal");
        jogador = "X";
    }
}

function trocaSimbolo() {
    if (huCo == "X") {
        huCo = "O";
        document.getElementById("x").classList.remove("sombra-espessa");
        document.getElementById("x").classList.add("sombra-normal");
        document.getElementById("o").classList.add("sombra-espessa");
        document.getElementById("o").classList.remove("sombra-normal");
        aiCo = "X";
    } else {
        huCo = "X";
        document.getElementById("o").classList.remove("sombra-espessa");
        document.getElementById("o").classList.add("sombra-normal");
        document.getElementById("x").classList.add("sombra-espessa");
        document.getElementById("x").classList.remove("sombra-normal");
        aiCo = "O";
    }
}


//efeito de opacidade no final do jogo
function mostrador1() {
    document.getElementById("vencedor").style.opacity = "0.5";
}
function mostrador2() {
    document.getElementById("vencedor").style.opacity = "1";
}

//interface de troca de modo
document.getElementById("botao-modos-de-jogo").addEventListener("click", event => {
    document.getElementById("modos-de-jogo-interface").style.visibility = "visible";
    document.getElementById("Jogador-Vs-Jogador").style.visibility = "visible";
    document.getElementById("Jogador-Vs-Maquina").style.visibility = "visible";
})
document.getElementById("Jogador-Vs-Jogador").addEventListener("click", event => {
    document.getElementById("Jogador-Vs-Jogador").style.visibility = "hidden";
    document.getElementById("Jogador-Vs-Maquina").style.visibility = "hidden";
    setTimeout(() => { document.getElementById("modos-de-jogo-interface").style.visibility = "hidden"; }, 300);
    document.getElementById("Jogador-Vs-Maquina").setAttribute("Jogador-Vs-Maquina", false);
    VsMaquina = false;
    limpaPlacar();
    funcVencedor();
    reiniciar();
    console.log("Jogador Vs Jogador");
})
document.getElementById("Jogador-Vs-Maquina").addEventListener("click", event => {
    document.getElementById("Jogador-Vs-Jogador").style.visibility = "hidden";
    document.getElementById("Jogador-Vs-Maquina").style.visibility = "hidden";
    setTimeout(() => { document.getElementById("modos-de-jogo-interface").style.visibility = "hidden"; }, 300);
    document.getElementById("Jogador-Vs-Maquina").setAttribute("Jogador-Vs-Maquina", true);
    limpaPlacar();
    funcVencedor()
    reiniciar();
    VsMaquina = true;
    console.log("Jogador Vs Maquina");
})

function limpaPlacar() {
    jo = 0;
    jx = 0;
    e = 0;
    document.getElementById("placar-x-numero").innerHTML = jx;
    document.getElementById("placar-empate-numero").innerHTML = e;
    document.getElementById("placar-o-numero").innerHTML = jo;
}

//Maquina
function minimax(tabuleiro2, player) {
    iter++;
    let array = avail(tabuleiro2);
    if (venceu(tabuleiro2, huPlayer)) {
        return {
            score: -10
        };
    } else if (venceu(tabuleiro2, aiPlayer)) {
        return {
            score: 10
        };
    } else if (array.length == 0) {
        return {
            score: 0
        };
    }

    var moves = [];
    for (var i = 0; i < array.length; i++) {
        var move = {};
        move.index = tabuleiro2[array[i]];
        tabuleiro2[array[i]] = player;

        if (player == aiPlayer) {
            var g = minimax(tabuleiro2, huPlayer);
            move.score = g.score;
        } else {
            var g = minimax(tabuleiro2, aiPlayer);
            move.score = g.score;
        }
        tabuleiro2[array[i]] = move.index;
        moves.push(move);
    }

    var bestMove;
    if (player === aiPlayer) {
        var bestScore = -10000;
        for (var i = 0; i < moves.length; i++) {
            if (moves[i].score > bestScore) {
                bestScore = moves[i].score;
                bestMove = i;
            }
        }
    } else {
        var bestScore = 10000;
        for (var i = 0; i < moves.length; i++) {
            if (moves[i].score < bestScore) {
                bestScore = moves[i].score;
                bestMove = i;
            }
        }
    }
    return moves[bestMove];
}

function avail(tabuleiro2) {
    return tabuleiro2.filter(s => s != "P" && s != "C");
}

function venceu(tabuleiro, jogador) {
    if (
        (tabuleiro[0] == jogador && tabuleiro[1] == jogador && tabuleiro[2] == jogador) ||
        (tabuleiro[3] == jogador && tabuleiro[4] == jogador && tabuleiro[5] == jogador) ||
        (tabuleiro[6] == jogador && tabuleiro[7] == jogador && tabuleiro[8] == jogador) ||
        (tabuleiro[0] == jogador && tabuleiro[3] == jogador && tabuleiro[6] == jogador) ||
        (tabuleiro[1] == jogador && tabuleiro[4] == jogador && tabuleiro[7] == jogador) ||
        (tabuleiro[2] == jogador && tabuleiro[5] == jogador && tabuleiro[8] == jogador) ||
        (tabuleiro[0] == jogador && tabuleiro[4] == jogador && tabuleiro[8] == jogador) ||
        (tabuleiro[2] == jogador && tabuleiro[4] == jogador && tabuleiro[6] == jogador)
    ) {
        return true;
    } else {
        return false;
    }
}