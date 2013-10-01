$(document).ready(function() {

	$("#speak_english").live("click", function(){
		$("#no_just_eng").show();
		
		$("#evaluate_skill").show();
		$("#ntv_and_eng2").hide();
		$("#eng_skill1").show();
		
		$("#evaluate_skills1").show();
		$("#evaluate_skills2").show();
		$("#evaluate_skills3").show();
		$("#evaluate_skills4").show();
		
		$("#yes_other").hide();
		$("#yes_other1").hide();
		$("#yes_other2").hide()		
		$("#yes_other3").hide();
		$("#yes_other4").hide();
		$("#yes_other5").hide();
		$("#yes_other6").hide();


		$("#ntv_other").hide();
		
		$("#ntv_and_eng1").hide();
		$("#ntv_and_eng3").hide();
		$("#native_other1").hide();
		$("#native_other2").hide();
		$("#native_other3").hide();
		$("#native_other4").hide();
		$("#ntv_and_eng9").hide();

		$("#native_other5").hide();
		$("#native_other6").hide();
		$("#native_other7").hide();
		$("#native_other8").hide();
		$("#native_other9").hide();
		$("#native_other10").hide();
		$("#native_other11").hide();
		$("#native_other12").hide();
		$("#native_other13").hide();
		$("#native_other14").hide();
		$("#native_other15").hide();

		$("#native_other16").hide();
	
	//	$("#eng_skill1").show();
	//	$("#eng_skill2").show();

/*		$('input:radio[name="speaking"]').attr('checked', false);
		$('input:radio[name="reading"]').attr('checked', false);
		$('input:radio[name="listening"]').attr('checked', false);
		$('input:radio[name="writing"]').attr('checked', false);*/
		
		zera_n11();

		$("input[name='start_learning']").val("None");
		$("input[name='everyday_months']").val("None");
		$("input[name='everyday_years']").val("None");
		$("input[name='week_percent']").val("None");
		
		zera_abroad();	
	});

	$("#speak_other").live("click", function(){
		
		$("#no_just_eng").hide();
		
		
		$("#eng_skill1").hide();
		
		$("#yes_other").show();
		$("#yes_other1").show();

		$("#others_languages").val("");
		$("#others_languages_fluent").val("");
		
		$("#evaluate_skills1").hide();
		$("#evaluate_skills2").hide();
		$("#evaluate_skills3").hide();
		$("#evaluate_skills4").hide();

		$('input:radio[name="lang"]').attr('checked', false);		
	});

	$("#liv_brazil").live("click", function(){
		$("#live_other1").show();
		
		$("#live_us1").hide();	
		$("#live").show();
		$("input[name='start_learning']").val("None");
	});
	
	$("#liv_us").live("click", function(){
		$("#live_other1").hide();
		$("#live").show();
		$("#live_us1").show();
		$("input[name='long_lived_us']").val("");
	});	

	$("#natv_eng").live("click", function(){
		$("#nativ_lang").val("English");
		
		$("#ntv_eng").show();
		$("#ntv_other").hide();
		
		$("#ntv_and_eng1").hide();

		$("#ntv_and_eng3").show();

		$("#native_other1").hide();
		$("#native_other2").hide();
		$("#native_other3").hide();
		$("#native_other4").hide();
		$("#ntv_and_eng9").hide();

		$("#native_other5").hide();
		$("#native_other6").hide();
		$("#native_other7").hide();
		$("#native_other8").hide();
		$("#native_other9").hide();
		$("#native_other10").hide();
		$("#native_other11").hide();
		$("#native_other12").hide();
		$("#native_other13").hide();
		$("#native_other14").hide();
		$("#native_other15").hide();

		$("#native_other16").hide();
	
	//	$("#eng_skill1").show();
	//	$("#eng_skill2").show();

/*		$('input:radio[name="speaking"]').attr('checked', false);
		$('input:radio[name="reading"]').attr('checked', false);
		$('input:radio[name="listening"]').attr('checked', false);
		$('input:radio[name="writing"]').attr('checked', false);*/
		
		zera_n11();
		
		$("input[name='start_learning']").val("None");
		$("input[name='everyday_months']").val("None");
		$("input[name='everyday_years']").val("None");
		$("input[name='week_percent']").val("None");

		$("#yes_other2").show();
		$("#yes_other3").show();
		$("#yes_other4").show();
		$("#yes_other5").show();
		$("#yes_other6").show();
		
		$("#evaluate_skill").show();
		$("#ntv_and_eng2").show();

		
		$("#evaluate_skills1").show();
		$("#evaluate_skills2").show();
		$("#evaluate_skills3").show();
		$("#evaluate_skills4").show();

		
	});

	$("#natv_other").live("click", function(){
		
		$("#ntv_eng").hide();
		$("#ntv_other").show();

		$("#ntv_and_eng1").show();

		$("#ntv_and_eng3").show();
		
		$("#native_other1").show();
		$("#native_other2").show();
		$("#native_other3").show();
		$("#native_other4").show();
		$("#ntv_and_eng9").show();		

		$("#native_other5").show();
		$("#native_other6").show();
		$("#native_other7").show();
		$("#native_other8").show();
		$("#native_other9").show();
		$("#native_other10").show();
		$("#native_other11").show();
		$("#native_other12").show();
		$("#native_other13").show();
		$("#native_other14").show();
		$("#native_other15").show();

		$("#native_other16").show();

		
//		$("#eng_skill1").hide();
//		$("#eng_skill2").hide();

		$("#nativ_lang").val("");
		$("input[name='start_learning']").val("");
		$("input[name='everyday_months']").val("");
		$("input[name='everyday_years']").val("");
		$("input[name='week_percent']").val("");
		
		$("#yes_other2").show();
		$("#yes_other3").show();
		$("#yes_other4").show();
		$("#yes_other5").show();
		$("#yes_other6").show();
		
		$("#evaluate_skill").show();
		$("#ntv_and_eng2").show();
		$("#eng_skill1").hide();
		
		$("#evaluate_skills1").show();
		$("#evaluate_skills2").show();
		$("#evaluate_skills3").show();
		$("#evaluate_skills4").show();


	});

	$("#abroad_yes").live("click", function(){
		$("#answer_abroad_long").show();
		$("#answer_abroad_percent").show();
		$("input[name='abroad_years']").val("");
		$("input[name='abroad_months']").val("");
		$("input[name='abroad_percent']").val("");
	});

	$("#abroad_no").live("click", 
		zera_abroad);

	$("#form_bi_eng").live("submit", function(event){
		event.preventDefault();
		$("#form_bi_eng").hide();

		$("#exp").show();
	


		$.post("testes_rafael/bi_eng_rooter.php?m=form_submit",$("#form_bi_eng").serialize(), function(){

		});

		return false;
	}); 
	
	$("form#form_bi_eng input[type=submit]").live("click", function(event){
		event.preventDefault();
		$("#form_bi_eng").hide();

		$("#exp").show();
	
		$.post("testes_rafael/bi_eng_rooter.php?m=form_submit",$("#form_bi_eng").serialize(), function(){

		});

		return false;
	});
	
	function zera_n11(){
		$('input:radio[name="working"]').attr('checked', false);
		$('input:radio[name="reading_for_studies"]').attr('checked', false);
		$('input:radio[name="writing_papers"]').attr('checked', false);
		$('input:radio[name="reading_pleasure"]').attr('checked', false);
		$('input:radio[name="talking"]').attr('checked', false);
		$('input:radio[name="groups"]').attr('checked', false);
		$('input:radio[name="internet"]').attr('checked', false);
		$('input:radio[name="game"]').attr('checked', false);
		$('input:radio[name="tv"]').attr('checked', false);
		$('input:radio[name="songs"]').attr('checked', false);
		$('input:radio[name="emails"]').attr('checked', false);
		
		$('input:radio[name="working_eng"]').attr('checked', false);
		$('input:radio[name="reading_for_studies_eng"]').attr('checked', false);
		$('input:radio[name="writing_papers_eng"]').attr('checked', false);
		$('input:radio[name="reading_pleasure_eng"]').attr('checked', false);
		$('input:radio[name="talking_eng"]').attr('checked', false);
		$('input:radio[name="groups_eng"]').attr('checked', false);
		$('input:radio[name="internet_eng"]').attr('checked', false);
		$('input:radio[name="game_eng"]').attr('checked', false);
		$('input:radio[name="tv_eng"]').attr('checked', false);
		$('input:radio[name="songs_eng"]').attr('checked', false);
		$('input:radio[name="emails_eng"]').attr('checked', false);
	}
	
	function zera_abroad(){
		$("#answer_abroad_long").hide();
		$("#answer_abroad_percent").hide();
		$("input[name='abroad_years']").val("None");
		$("input[name='abroad_months']").val("None");
		$("input[name='abroad_percent']").val("None");	
	}
});



