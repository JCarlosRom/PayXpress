

function jQueryTableagregar(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead_agregar').empty()
	$('#thead_agregar').append(thead)


	var tbody = "";
	var indices = data[0].length;
	$("idstore_add").val(data[0][1]);

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'

		for (var j = 0; j < indices; j++) {


				tbody += '<td>'+data[i][j]+'</td>'


		}

		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody_agregar').empty()
	$('#tbody_agregar').append(tbody)

}

function jQueryTableProductos(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead_productos').empty()
	$('#thead_productos').append(thead)


	var tbody = "";
	var indices = data[0].length;
	$("idstore_add").val(data[0][1]);

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'

		for (var j = 0; j < indices; j++) {


				tbody += '<td>'+data[i][j]+'</td>'


		}

		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody_productos').empty()
	$('#tbody_productos').append(tbody)

}

function jQueryTableSearch(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead_search').empty()
	$('#thead_search').append(thead)


	var tbody = "";
	var indices = data[0].length;
	$("idstore_add").val(data[0][1]);

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'

		for (var j = 0; j < indices; j++) {


				tbody += '<td>'+data[i][j]+'</td>'



		}



		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody_search').empty()
	$('#tbody_search').append(tbody)

}

function jQueryTableclient(id_container, headers, data, LimitRow, maxHeight, NameFunc) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead_client').empty()
	$('#thead_client').append(thead)


	var tbody = "";
	var indices = data[0].length;
	$("idstore_add").val(data[0][1]);

	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="" id="row_'+data[i][0]+'">'

		for (var j = 0; j < indices; j++) {


				tbody += '<td>'+data[i][j]+'</td>'
		}

		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
	            "overflow-y":"scroll",
	            "max-height":maxHeight
	        });
        }
	}
	$('#tbody_client').empty()
	$('#tbody_client').append(tbody)

}



function jQueryTableNormal(id_container, headers, data, LimitRow, maxHeight) {

	var thead = '<tr id="cabecera">';

	for (var i = 0; i < headers.length; i++){
		thead += '<th>'+headers[i]+'</th>'
	}
	thead += '</tr>'

	$('#thead2').empty()
	$('#thead2').append(thead)

	var tbody = "";
	var indices = data[0].length;
	for (var i = 0; i < data.length; i++) {
		tbody += '<tr data-toggle="tooltip" title="Hooray!">'
		for (var j = 1; j < indices; j++) {

			if(j == (indices-3)){
				//Obtengo la fecha en formato YYYY-mm-dd
				var split = data[i][j].split('-')
				var fecha = split[2]+' de '+meses(split[1])+' de '+split[0]
				tbody += '<td>'+fecha+'</td>'
			}
			else{
				if(j == (indices-1))
					if(data[i][j] == "Pagado")
						tbody += '<td><button type="button" class="btn btn-success btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
					else
						tbody += '<td><button type="button" class="btn btn-danger btn-xs">&nbsp&nbsp&nbsp'+data[i][j]+'&nbsp&nbsp&nbsp</button></td>'
				else
					tbody += '<td>'+data[i][j]+'</td>'
			}
		}



		tbody += '</tr>'

		if(i == LimitRow){
			$('#'+id_container).css({
            "overflow-y":"scroll",
            "max-height":maxHeight
        });}
	}
	$('#tbody').empty()
	$('#tbody').append(tbody)

}

function meses(key){
	var meses = {"01": "Enero", "02": "Febrero", "03": "Marzo",
				 "04": "Abril", "05": "Mayo", "06": "Junio",
				 "07": "Julio", "08": "Agosto","09": "Septiembre",
				 "10": "Octubre", "11": "Noviembre", "12": "Diciembre"}
	return meses[key]
}
