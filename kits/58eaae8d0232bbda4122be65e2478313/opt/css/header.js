function inputDefault(field, holder) {
	if (!document.getElementById) return false;
	if (!document.getElementById(field)) return false;
	var fieldtochange = document.getElementById(field);
	fieldtochange.value = holder;
	fieldtochange.onfocus = function() {
		if (this.value == holder)
			this.value = '';
	}
	fieldtochange.onblur = function() {
		if (this.value == '')
			this.value = holder;
	}
	return true;
}

window.onload = function() {
	inputDefault('hdr_search_query', 'Search for...');
	inputDefault('ftr_search_query', 'Search for...');
}

var ipp_form_submitted;

function submit_ipp_form()
{
  //alert("Before submit_ipp_form!");
  var myform_v=document.forms["myform"];
  if ( myform_v && ipp_form_submitted != 1 ) {
        //alert("submit_ipp_form!");
        ipp_form_submitted = 1;
        myform_v.submit();
  }
  return false;

}

function addOnloadEvent() {
        if (window.addEventListener)
                window.addEventListener('load',submit_ipp_form,false);
        else if (document.addEventListener)
                document.addEventListener('load',submit_ipp_form,false);
        else if (window.attachEvent)
                window.attachEvent('onload',submit_ipp_form);
        else {//Older browsers only
                if (typeof window.onload=='function') {
                        var oldload=window.onload;
                        window.onload=function(){
                                oldload();
                                submit_ipp_form();
                        }
                } else window.onload=submit_ipp_form;
        }
}

