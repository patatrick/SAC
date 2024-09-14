
function HoraActual(){ 
        momentoActual = new Date() 
        hora = momentoActual.getHours() 
        minuto = momentoActual.getMinutes() 
        segundo = momentoActual.getSeconds() 

if (segundo < 10 & minuto < 10){  horaImprimible = hora + " : 0" + minuto + " : 0" + segundo;
   document.principal.reloj.value = horaImprimible 
}
else if (segundo < 10 & minuto > 10){  horaImprimible = hora + " : " + minuto + " : 0" + segundo;
   document.principal.reloj.value = horaImprimible 
}
else if (segundo > 10 & minuto < 10){  horaImprimible = hora + " : 0" + minuto + " : " + segundo;
   document.principalj.reloj.value = horaImprimible 
}
else{
	horaImprimible = hora + " : " + minuto + " : " + segundo;
        document.principal.reloj.value = horaImprimible 
}
        setTimeout(HoraActual,1000)
    };

    function FechaActual(){
    	momentoActual = new Date()
    	dia = momentoActual.getDate()
        mes = momentoActual.getMonth()
        ano = momentoActual.getFullYear()

if (dia < 10 & mes < 10){  fecha = " 0" + dia + " / 0" + mes + " / " + ano
        document.principal.fecha.value = fecha 
}
else if (dia < 10 & mes > 10){  fecha = " 0" + dia + " / " + mes + " / " + ano
        document.principal.fecha.value = fecha
}
else if (dia > 10 & mes < 10){ fecha = dia + " / 0" + mes + " / " + ano
        document.principal.fecha.value = fecha
}
else{
	fecha = dia + " / " + mes + " / " + ano
        document.principal.fecha.value = fecha

    }
};
