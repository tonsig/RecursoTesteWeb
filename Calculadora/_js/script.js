function insert(num){ //cria uma função insert, que recebe um valor num
    document.form.textbox.value = document.form.textbox.value + num; //atribui ao objeto textbox, dentro do form, o valor dele mesmo mais o num.
}
function clean(){ //cria uma função clean.
    document.form.textbox.value = ''; //atribui um valor de string vazia ao objeto textbox.
}
function total(){ //cria uma função total.
    var x = document.form.textbox.value; //cria uma váriavel x e dentro dela atribui-se o valor do objeto textbox.
    if(x){ //Verifica se X é verdadeiro.
        document.form.textbox.value = eval(x); //Se for, realiza uma operação usando os valores presentes no objeto textbox.
    }
}
function back(){ //cria uma função back.
    var exp = document.form.textbox.value; //cria uma váriavel exp e atribui a ela o valor do objeto textbox.
    document.form.textbox.value = exp.substring(0, exp.length-1); //pega o valor do objeto textbox e atribui o próprio valor, menos um caractere presente ao final do valor.
}