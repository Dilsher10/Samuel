/**
 *
 * Scripts
 *
 * Initialization of the template base and page scripts.
 *
 *
 */

 class Scripts {
  constructor() {
    this._initSettings();
    this._initVariables();
    this._addListeners();
    this._init();
  }

  // Showing the template after waiting for a bit so that the css variables are all set
  // Initialization of the common scripts and page specific ones
  _init() {
    setTimeout(() => {
      document.documentElement.setAttribute('data-show', 'true');
      document.body.classList.remove('spinner');
      this._initBase();
      this._initCommon();
      this._initPages();
    }, 100);
  }

  // Base scripts initialization
  _initBase() {
    // Navigation
    if (typeof Nav !== 'undefined') {
      const nav = new Nav(document.getElementById('nav'));
    }

    // Search implementation
    if (typeof Search !== 'undefined') {
      const search = new Search();
    }

    // AcornIcons initialization
    if (typeof AcornIcons !== 'undefined') {
      new AcornIcons().replace();
    }
  }

  // Common plugins and overrides initialization
  _initCommon() {
    // common.js initialization
    if (typeof Common !== 'undefined') {
      let common = new Common();
    }
  }

  // Pages initialization
  _initPages() {
    // customers.detail.js initialization
    if (typeof CustomersDetail !== 'undefined') {
      const customersDetail = new CustomersDetail();
    }
    // customers.list.js initialization
    if (typeof CustomersList !== 'undefined') {
      const customersList = new CustomersList();
    }
    // dashboard.js initialization
    if (typeof Dashboard !== 'undefined') {
      const dashboard = new Dashboard();
    }
    // discount.js initialization
    if (typeof Discount !== 'undefined') {
      const discount = new Discount();
    }
    // orders.list.js initialization
    if (typeof OrdersList !== 'undefined') {
      const ordersList = new OrdersList();
    }
    // products.detail.js initialization
    if (typeof ProductsDetail !== 'undefined') {
      const productsDetail = new ProductsDetail();
    }
    // products.list.js initialization
    if (typeof ProductsList !== 'undefined') {
      const productsList = new ProductsList();
    }
    // settings.general.js initialization
    if (typeof SettingsGeneral !== 'undefined') {
      const settingsGeneral = new SettingsGeneral();
    }
    // storefront.categories.js initialization
    if (typeof StorefrontCategories !== 'undefined') {
      const storefrontCategories = new StorefrontCategories();
    }
    // storefront.checkout.js initialization
    if (typeof StorefrontCheckout !== 'undefined') {
      const storefrontCheckout = new StorefrontCheckout();
    }
    // storefront.detail.js initialization
    if (typeof StorefrontDetail !== 'undefined') {
      const storefrontDetail = new StorefrontDetail();
    }
    // storefront.filters.js initialization
    if (typeof StorefrontFilters !== 'undefined') {
      const storefrontFilters = new StorefrontFilters();
    }
    // storefront.home.js initialization
    if (typeof StorefrontHome !== 'undefined') {
      const storefrontHome = new StorefrontHome();
    }
  }

  // Settings initialization
  _initSettings() {
    if (typeof Settings !== 'undefined') {
      const settings = new Settings({attributes: {placement: 'vertical', layout: 'boxed', color: 'light-green' }, showSettings: true, storagePrefix: 'acorn-ecommerce-platform-'});
    }
  }

  // Variables initialization of Globals.js file which contains valus from css
  _initVariables() {
    if (typeof Variables !== 'undefined') {
      const variables = new Variables();
    }
  }

  // Listeners of menu and layout changes which fires a resize event
  _addListeners() {
    document.documentElement.addEventListener(Globals.menuPlacementChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.layoutChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });

    document.documentElement.addEventListener(Globals.menuBehaviourChange, (event) => {
      setTimeout(() => {
        window.dispatchEvent(new Event('resize'));
      }, 25);
    });
  }
}

// Shows the template after initialization of the settings, nav, variables and common plugins.
(function () {
  window.addEventListener('DOMContentLoaded', () => {
    // Initializing of the Scripts
    if (typeof Scripts !== 'undefined') {
      const scripts = new Scripts();
    }
  });
})();

// Disabling dropzone auto discover before DOMContentLoaded
(function () {
  if (typeof Dropzone !== 'undefined') {
    Dropzone.autoDiscover = false;
  }
})();


// Datatable

    $(document).ready(function() {
        $('.tables').DataTable({
            "pageLength": 10,
        });
    });

// Show image after upload

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#chooseFile").change(function() {
      readURL(this);
    });
    
    
    


function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}

// Stop submiting form after refresh the page 

if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    
// Save data without reloading

$(document).ready(function() {
 
	//##### Add record when Add Record Button is click #########
	$("#content-form").submit(function (e) {
			e.preventDefault();
			if($("#contentText").val()==='' && $("#contentText2").val()==='')
			{
				alert("Please enter some text!");
				window.location.href='Products_List.php';
			}
		 	var myData = $("#contentText").val(); 
             var myData2 = $("#contentText2").val(); //build a post data structure
			jQuery.ajax({
			type: "POST", // Post / Get method
			url: "insert.php", //Where form data is sent on submission
			dataType:"text", // Data type, HTML, json etc.
			data:{ "content_txt": myData, "tagsBasic": myData2}, //Form variables
			success:function(response){
				$("#responds").append(response);
				$('#contentText').val(""),
                $('#contentText2').val("")
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			});
	});
 
});



//script for banner 1
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder1').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#chooseFile1").change(function() {
      readURL(this);
    });
    
    //script for banner 2
    
        function readURL2(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder2').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile2").change(function() {
      readURL2(this);
    });

    //script for category 1 image
        function readURL3(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder3').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile3").change(function() {
      readURL3(this);
    });
        //script for category 2 image
        
                function readURL4(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder4').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile4").change(function() {
      readURL4(this);
    });
    
    
           //script for category 3 image 
    
    function readURL5(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder5').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile5").change(function() {
      readURL5(this);
    });
    
    
        function readURL6(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder6').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile6").change(function() {
      readURL6(this);
    });
    
            function readURL7(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder7').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile7").change(function() {
      readURL7(this);
    });
    
                function readURL8(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder8').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile8").change(function() {
      readURL8(this);
    });
    
    
    function readURL9(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder9').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile9").change(function() {
      readURL9(this);
    });
    
    
    function readURL10(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder10').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile10").change(function() {
      readURL10(this);
    });
    
    
    
    function readURL11(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder11').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile11").change(function() {
      readURL11(this);
    });
    
        function readURL12(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder12').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile12").change(function() {
      readURL12(this);
    });
    
        function readURL13(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder13').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile13").change(function() {
      readURL13(this);
    });
    
        function readURL14(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder14').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile14").change(function() {
      readURL14(this);
    });
    
    
        function readURL15(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder15').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile15").change(function() {
      readURL15(this);
    });
    
    
        function readURL16(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder16').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile16").change(function() {
      readURL16(this);
    });
    
    
        function readURL17(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder17').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile17").change(function() {
      readURL17(this);
    });
    
    
        function readURL18(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder18').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile18").change(function() {
      readURL18(this);
    });
    
    
        function readURL19(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder19').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile19").change(function() {
      readURL19(this);
    });
    
    
        function readURL20(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder20').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile20").change(function() {
      readURL20(this);
    });
    
    
        function readURL21(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder21').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile21").change(function() {
      readURL21(this);
    });
    
    
        function readURL22(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder22').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile22").change(function() {
      readURL22(this);
    });
    
    
        function readURL23(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder23').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile23").change(function() {
      readURL23(this);
    });
    
    
    
        function readURL24(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imgPlaceholder24').attr('src', e.target.result);
        }
        // base64 string conversion
        reader.readAsDataURL(input.files[0]);
      }
    }
        $("#chooseFile24").change(function() {
      readURL24(this);
    });




// Allow only alphabetic characters and spaces

function validateText(event) {
  var key = event.keyCode || event.charCode;
  if ((key >= 48 && key <= 57) || (key >= 96 && key <= 105)) {
    event.preventDefault();
    return false;
  }
}

