$(function() {
    // Punto 1.
    // Crear código para filtrar pacientes por nombre.
    var busqueda = $('#busqueda'),
	titulo = $('div.filtros div.row div.name');
	$(titulo).each(function(){
		var li = $(this);
		$(busqueda).keyup(function(){
			this.value = this.value.toLowerCase();
			$(li).parent().hide();
			var txt = $(this).val();
			if($(li).text().toLowerCase().indexOf(txt) > -1){
				$(li).parent().show();
			}
		});
	});
});