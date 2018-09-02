
$(document).ready(function () {
    $("#education_stream").change(function () {

        var stream = $("#education_stream").val();
        $("#course").empty();
        switch (stream) {
            
            case "engineering":
               // var option1 = $('<option value="B.TECH">B.TECH</option>');
					 $("#course").append('<option value="">SELECT</option>');	               
                $("#course").append('<option value="b.tech"> B.TECH </option>');
                //var option2 = $('<option value="M.TECH">M.TECH</option>');
                $("#course").append('<option value="m.tech"> M.TECH </option>');
					 $("#course").append('<option value="b.e"> B.E </option>');
					 $("#course").append('<option value="m.arch"> M.ARCH </option>');
					 $("#course").append('<option value="b.arch"> B.ARCH </option>');
					 $("#course").append('<option value="m.e"> M.E </option>');

                break;
            case "medical":
            	 $("#course").append('<option value="">SELECT</option>');
                $("#course").append('<option value="MBBS"> M.B.B.S </option>');
                $("#course").append('<option value="MD"> M.D </option>');
                $("#course").append('<option value="DHS"> D.H.S </option>');
                $("#course").append('<option value="BDS"> B.D.S </option>');
                $("#course").append('<option value="BAMS"> B.A.M.S </option>');
                $("#course").append('<option value="BPT"> B.P.T </option>');
                break;
            case "law":
                var option1 = $('<option value="LLB">LLB</option>');
					 $("#course").append('<option value="">SELECT</option>');                
                $("#course").append(option1);
                $("#course").append('<option value="LLM"> L.L.M </option>');
					 $("#course").append('<option value="MBALLM"> MBA-LLM </option>');
				 	 $("#course").append('<option value="PHD"> Ph.D </option>');
					 $("#course").append('<option value="BALLB"> BA-LLB </option>');
					 $("#course").append('<option value="BSCLLB"> BSc-LLB </option>');                
                break;
        }
    });                
});	

$(document).ready(function () {
    $("#course").change(function () {

        var course = $("#course").val();
        $("#specialization").empty();
        switch (course) {
            
            case "b.tech":
				 $("#specialization").append('<option value=""> SELECT </option>');				 
				 $("#specialization").append('<option value="ece"> ELECTRONICS </option>');				            
             $("#specialization").append('<option value="cse"> COMPUTER SCIENCE </option>');
             $("#specialization").append('<option value="ce"> CIVIL </option>');
             $("#specialization").append('<option value="bt"> BIOTECHNOLOGY </option>');
             break;
             
            case "m.tech":
				 $("#specialization").append('<option value=""> SELECT </option>');			
				 $("#specialization").append('<option value="CHEMICAL"> CHEMICAL </option>');				            
             $("#specialization").append('<option value="COMPUTER_SCIENCE"> COMPUTER SCIENCE </option>');
             $("#specialization").append('<option value="MACHINE_LEARNING"> MACHINE LEARNING </option>');
             $("#specialization").append('<option value="ARTIFICIAL_INTELLIGENCE"> ARTIFICIAL INTELLIGENCE </option>');
             $("#specialization").append('<option value="BIO_INFORMATICS"> BIO INFORMATICS </option>');
             break;

				case "b.e":
				 $("#specialization").append('<option value="ARCHITECTURE"> ARCHITECTURE </option>');				            
             $("#specialization").append('<option value="ELECTRONICS"> ELECTRONICS </option>');
             break;
             
            case "m.arch":
				 $("#specialization").append('<option value="BUILDING_DESIGN"> BUILDING_DESIGN </option>');				            
             $("#specialization").append('<option value="SOIL_MECHANICS"> SOIL MECHANICS </option>');
             $("#specialization").append('<option value="GEOLOGY"> GEOLOGY </option>');
			    break;             
             
            case "b.arch":
				 $("#specialization").append('<option value="THEORY_OF_STRUCTURE"> THEORY OF STRUCTURE </option>');				            
             $("#specialization").append('<option value="BUILDING_CONSTRUCTION"> BUILDING CONSTRUCTION </option>');
   			 break;
   			          
				case "m.e":
				 $("#specialization").append('<option value="MECHANICAL_VIBRATION"> MECHANICAL VIBRATION </option>');				            
             $("#specialization").append('<option value="REFRIGERATION"> REFRIGERATION </option>');
				 break;   			
				  
            case "MBBS":
				 $("#specialization").append('<option value="GENERAL_MEDICINE"> GENERAL MEDICINE </option>');				            
             $("#specialization").append('<option value="PEDIATRICS"> PEDIATRICS </option>');
             $("#specialization").append('<option value="ENT"> ENT </option>');
				 $("#specialization").append('<option value="DERMATOLOGY"> DERMATOLOGY </option>');
				 break;
				
				case "MD":
				 $("#specialization").append('<option value="NEUROLOGY"> NEUROLOGY </option>');				            
             $("#specialization").append('<option value="NEPHROLOGY"> NEPHROLOGY </option>');
             break;				 
				 
				case "BAMS":
				 $("#specialization").hide();
             $('#specshide').hide();				 
				 break;
            
            case "LLB":
				 $("#specialization").hide();
             $('#specshide').hide();			 
				 break;
            
            case "MBALLM":
             $("#specialization").hide();
             $('#specshide').hide();
				 //$("#specialization").prop('disabled',true);            syntax to disable the select specialization field				            
            
             break;					 
				 
				 
				 
        }
    });
});