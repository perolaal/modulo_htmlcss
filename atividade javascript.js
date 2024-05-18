
    var nome = "pérola";
    console.log(nome);
    document.getElementById("nomeDisplay").innerText = nome;

    var varExemplo = "Esta é uma variável var";
    let letExemplo = "Esta é uma variável let";
    const constExemplo = "Esta é uma variável const";

    console.log(varExemplo);
    console.log(letExemplo);
    console.log(constExemplo);
    
    document.getElementById("mensagem").innerText = "Olá, Mundo!";

    
    function soma(a, b) {
        return a + b;
    }
    console.log(soma(3245, 3));
    document.getElementById("a+b=").innerText = "Soma: " + soma(3245, 3);

   
    const multiplicaPorDez = (num) => num * 10;
    console.log(multiplicaPorDez(5));
    document.getElementById("multiplicaResultado").innerText = "Multiplicação por 10: " + multiplicaPorDez(5);

    
    function maiorIdade(idade) {
        return idade >= 18 ? "Maior de idade" : "Menor de idade";
    }
    console.log(maiorIdade(20));
    document.getElementById("maiorIdadeResultado").innerText = maiorIdade(20);

    function verificarIdade(idade) {
        if (idade < 12) {
            return "Criança";
        } else if (idade < 18) {
            return "Adolescente";
        } else {
            return "Adulto";
        }
    }
    console.log(verificarIdade(15));
    document.getElementById("maiorIdadeResultado").innerText += " - " + verificarIdade(15);

    
    function diaDaSemana(dia) {
        switch(dia) {
            case 1: return "Segunda-feira";
            case 2: return "Terça-feira";
            case 3: return "Quarta-feira";
            case 4: return "Quinta-feira";
            case 5: return "Sexta-feira";
            case 6: return "Sábado";
            case 7: return "Domingo";
            default: return "Número inválido";
        }
    }
    console.log(diaDaSemana(3));
    document.getElementById("diaDaSemanaResultado").innerText = diaDaSemana(3);

    
    let contador = 0;
    while (contador <= 5) {
        console.log(contador);
        contador++;
    }

  
    function calculaDesconto(preco, desconto) {
        return preco - (preco * (desconto / 100));
    }
    console.log(calculaDesconto(100, 10));
    document.getElementById("calculaDescontoResultado").innerText = "Preço com desconto: " + calculaDesconto(100, 10);

    function calculaMedia(numeros) {
        let soma = numeros.reduce((acc, num) => acc + num, 0);
        return soma / numeros.length;
    }
    let numeros = [10, 20, 30, 40, 50];
    console.log(calculaMedia(numeros));
    document.getElementById("calculaMediaResultado").innerText = "Média: " + calculaMedia(numeros);

 
    const PI = 3.14159;
    function calculaAreaCirculo(raio) {
        return PI * raio * raio;
    }
    console.log(calculaAreaCirculo(5));
    document.getElementById("calculaAreaCirculoResultado").innerText = "Área do círculo: " + calculaAreaCirculo(5);

    
    function inverteString(str) {
        return str.split('').reverse().join('');
    }
    console.log(inverteString("JavaScript"));
    document.getElementById("inverteStringResultado").innerText = "String invertida: " + inverteString("JavaScript");

  
    let lista = document.getElementById("lista");
    let novoItem = document.createElement("li");
    novoItem.innerText = "Novo Item";
    lista.appendChild(novoItem);

  
    function ordenaArray(arr) {
        return arr.sort((a, b) => a - b);
    }
    let arrayNumeros = [5, 3, 8, 1, 2];
    console.log(ordenaArray(arrayNumeros));
    document.getElementById("ordenaArrayResultado").innerText = "Array ordenado: " + ordenaArray(arrayNumeros).join(', ');

   
    function verificaPrimo(num) {
        if (num <= 1) return false;
        for (let i = 2; i < num; i++) {
            if (num % i === 0) return false;
        }
        return true;
    }
    console.log(verificaPrimo(7));
    document.getElementById("verificaPrimoResultado").innerText = "Número primo: " + verificaPrimo(7);

   
    function calculaFatorial(num) {
        if (num === 0) return 1;
        return num * calculaFatorial(num - 1);
    }
    console.log(calculaFatorial(5));
    document.getElementById("calculaFatorialResultado").innerText = "Fatorial: " + calculaFatorial(5);

    
    function geraSenha(tamanho) {
        const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
        let senha = '';
        for (let i = 0; i < tamanho; i++) {
            const indice = Math.floor(Math.random() * caracteres.length);
            senha += caracteres[indice];
        }
        return senha;
    }
    console.log(geraSenha(10));
    document.getElementById("geraSenhaResultado").innerText = "Senha gerada: " + geraSenha(10);

    
    document.getElementById("nomeDisplay").innerText = "Novo Conteúdo";

  
    function validaFormulario() {
        const nome = document.getElementById("nomeInput").value;
        if (nome === "") {
            alert("O campo nome é obrigatório!");
            return false;
        }
        return true;
    }