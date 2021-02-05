'use strict';

class FunctionsJS {

    productosJSON = new Array();
    productoSeleccionado = null;
    cantidad = 0;

    constructor() {
        this.getProductosJSON();
        this.seleccionProducto();
    }

    getProductosJSON = () => {
        fetch('../data.json')
            .then((respuesta) => respuesta.json())
            .then((datos) => datos.forEach((producto) => this.productosJSON.push(producto)));
    }

    productoSeleccionado(producto) {
        console.log(producto);
    }

    seleccionProducto() {
        let contenedor_product = document.getElementsByClassName('product');
        let container_principal = document.getElementsByClassName('container');
        console.log(container_principal);
        let div_form;
        let form;
        let btn_restar;
        let input_cantidad;
        let btn_sumar;
        let btn_comprar;


        for (let producto of contenedor_product) {
            let boton = producto.getElementsByTagName('button');

            boton[0].onclick = () => {
                if (this.productoSeleccionado === null) {
                    console.log('estoy alla');
                    this.productoSeleccionado = JSON.parse(boton[0].value);

                    div_form = document.createElement('div');
                    div_form.id = 'div_form';
                    div_form.setAttribute('style', 'width: 100%; display: flex; justify-content: center; flex-direction: column;');

                    console.log(div_form);

                    form = document.createElement('form');
                    form.setAttribute('method', 'POST');
                    form.setAttribute('action', '../views/carrito.php');

                    input_cantidad = document.createElement('input');
                    input_cantidad.name = "cantidad";
                    input_cantidad.setAttribute('style', 'width: 200px;')
                    input_cantidad.innerText = this.cantidad;
                    input_cantidad.value = this.cantidad;
                    input_cantidad.type = "text";

                    btn_restar = document.createElement('button');
                    btn_restar.type = "button";
                    btn_restar.onclick = (ev) => {
                        if (this.cantidad > 0) {
                            this.cantidad--;
                        }

                        input_cantidad.innerText = this.cantidad;
                        input_cantidad.value = this.cantidad;
                    };
                    btn_restar.innerHTML = "<i class=\"fas fa-minus\"></i>";

                    btn_sumar = document.createElement('button');
                    btn_sumar.type = "button";
                    btn_sumar.onclick = (ev) => {
                        this.cantidad++;

                        input_cantidad.innerText = this.cantidad;
                        input_cantidad.value = this.cantidad;

                        if (this.cantidad > 0 && !form.contains(btn_comprar)) {
                            let inputProducto = document.createElement('input');
                            inputProducto.type = 'hidden';
                            inputProducto.name = 'productoSeleccionado';
                            console.log(this.productoSeleccionado);
                            inputProducto.value = JSON.stringify(this.productoSeleccionado);

                            btn_comprar = document.createElement('input');
                            btn_comprar.type = 'submit';
                            btn_comprar.name = 'productoSeleccionado';
                            btn_comprar.innerText = 'Añadir al Carrito';

                            form.append(btn_comprar, inputProducto);
                        }
                    };
                    btn_sumar.innerHTML = "<i class=\"fas fa-plus\"></i>";

                    form.append(btn_restar, input_cantidad, btn_sumar);

                    div_form.appendChild(form);
                    container_principal[0].appendChild(div_form);
                } else if (this.productoSeleccionado.nombre == JSON.parse(boton[0].value).nombre) {
                    div_form = document.getElementById('div_form');

                    container_principal[0].removeChild(div_form);

                    this.productoSeleccionado = null;
                } else
                if (this.productoSeleccionado.nombre != JSON.parse(boton[0].value).nombre) {
                    this.productoSeleccionado = JSON.parse(boton[0].value);
                }
            }
        }

    }
}