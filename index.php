<?php
/*
 * Template Name: Dialog System (Redux-5)
 *
 *
 * */

get_header(); ?>

    <div id="main-content">
        <div class="container">
            <div class="row">
                
                <head>
                
                  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
                
                  <style>
    .alexa-body{
      background: #334453;
    }
    .alexa-header{
      background: #253443;
      height: 70px;
      padding-top: 12px;
      color: #fff;
      font-size: 30px;
    }
    .alexa-header .alexa-box{
      color: #fff;
    }
    .alexa-footer{
      background: #253443;
      height: 70px;
      padding-top: 15px;
    }
    .alexa-section{
      height: auto;
      padding-bottom:100px;
      min-height: calc(100vh - 640px);
      background: #202a34;
      overflow-y: auto;
     
    }

    .alexa-row{
      display: flex;
      justify-content: space-around;
      margin: 10px 0;
    }

    .row-id{
      width: 50px;
      height: 50px !important;
      text-align: center;
      background: #324255;
      border: none;
      border-radius: 50% !important;
      color: #fff;
      text-align: center;
    }

    .alexa-box, .hs-box input{
      width: 27%;
      height: 50px;
      border: none;
      border-radius: 4px;
      padding-left: 10px;
      color: #ffffff;
    }
    .hs-box{
    	width: 27%;
    }
    .hs-box input{
      width: 100%;
      margin-bottom: 10px;
    }
    .hs-box input{
      background: #024242;
    }

    .as, .ad, .hs-box input.active{
      background: #5384ff;
    }
    
    #hs-dropdown, #as-dropdown, #ad-dropdown, #sub-ad-dropdown{
      display: none;
      width: 28%;
      background: #8492af;
      position: absolute;
      
      border-radius: 3px;
      padding: 10px 5px;
      box-shadow: 5px 5px 10px;
    }
    #as-dropdown p, #ad-dropdown p, #sub-ad-dropdown p, #hs-dropdown p{
      margin: 0;
      padding-left: 8px;
      padding-right: 8px;
    }

    #as-dropdown p:hover, #ad-dropdown p:hover,#sub-ad-dropdown p:hover, #hs-dropdown p:hover{
      background: #65a8fe;
      padding-left: 10px;
      padding-right: 10px;
    }

    input{
      outline: none;
    }

    .add-input {
      background: transparent;
      border: 0;
      
      border-bottom: 1px solid #334453;
      margin-left: 10px;
    }
    #hs-items, #as-items, #ad-items{
     
    }
    .hs-item, .as-item, .ad-item, .sub-ad-item{
      padding: 2px 0;
      position: relative;
    }
    .drop-close{
      float: right;
    }
    .human-delete{
      position: absolute;
      right: 0;
    }

    .hs-item:hover{
      background: #d7d7d7;
    }
    .hs-item{
      display: flex;
      justify-content: space-between;
    }
    .hs-item button{
      border: none;
      background: none;
      outline: none;
    }
    .hs-item button:hover{
      color: red;
      cursor: pointer;
    }
    .hs-item .edit{
      color: green;
    }
    .hs-item .delete{
      color: blue;
    }
    #hs-dropdown input{
      background: none;
      outline: none;
      border: none;
    }
    .ad.alexa-box{
      width: 40%;
      margin-right: 5px;
    }
    .ad-item input, .ad-new-input, .sub-ad-item input, .sub-ad-new-input{
      width: 100%;
    }
    
    
    
    @media screen and (max-width:768px) {
    
    	.alexa-section{
        	padding-bottom:80px;
        }
    	.alexa-header{
        	height:50px;
            font-size:16px;            
        }
        
    	.row-id{
      		width: 30px;
     		height: 30px !important;      		
    	}

    	.alexa-box{
      		width: 29%;
      		height: 30px !important;
      		padding-left:0px;
            text-align:center;
    	}
    }

    .sub-ad-item input{
      padding:5px 10px;
      border: none;
      background: #bdbdbd;
      color:#777777;
    }

    input.isflow{
      background: #202a34;
      color:#fff;
    }

    #overlay{ 
      position: fixed;
      top: 0;
      z-index: 100;
      width: 100%;
      height:100%;
      display: none;
      background: rgba(0,0,0,0.6);
    }
    .cv-spinner {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;  
    }
    .spinner {
      width: 40px;
      height: 40px;
      border: 4px #ddd solid;
      border-top: 4px #2e93e6 solid;
      border-radius: 50%;
      animation: sp-anime 0.8s infinite linear;
    }
    @keyframes sp-anime {
      100% { 
        transform: rotate(360deg); 
      }
    }
    .is-hide{
      display:none;
    }

    
  </style>
</head>

<body class = "alexa-body">
    <div id="overlay">
      <div class="cv-spinner">
        <span class="spinner"></span>
      </div>
    </div>

  <div class="">

    <header class="alexa-header">

      <div class="alexa-row">
        <div class="row-id" style="visibility: hidden;"></div>
        <div class="alexa-box">Human Says:</div>
        <div class="alexa-box">Al Says:</div>
        <div class="alexa-box">Al Does:</div>
      </div>

    </header>

    <section class="alexa-section">

      <div id="as-dropdown" class="dropdown">
      </div>

      <div id="ad-dropdown" class="dropdown">
        <p class="ad-new-btn"> + Add New </p>
      </div>

      <div id="sub-ad-dropdown" class="dropdown">
        <p class="sub-ad-new-btn"> + Add New </p>
      </div>

    </section>

    <footer class="alexa-footer">

      <div class="row">
        <div class="col-8"></div>
        <div class="col-4 ">
          <button id="create_test" class="btn btn-primary btn-lg" style="display:block; margin:0 auto;">Execute</button>
        </div>
      </div>

    </footer>
    
  </div>

  <!-- JavaScript Libraries -->
  <script src="./jquery.min.js"></script>
  <script src="http://noiman.com/wp-content/themes/businesslounge-child/redux.js"></script>
  
  <script>
    jQuery(document).ready(function ($) {

      const HS_NEW_BOX = 'HS_NEW_BOX';
      const HS_BOX_ADD = 'HS_BOX_ADD';
      const HS_BOX_EDIT = 'HS_BOX_EDIT';
      const HS_BOX_ACTIVE = 'HS_BOX_ACTIVE';

      const AS_NEW_BOX = 'AS_NEW_BOX';
      const AS_BOX_EDIT = 'AS_BOX_EDIT';
      const AS_SELECT = 'AS_SELECT';

      const AD_NEW_BOX = 'AD_NEW_BOX';
      const AD_BOX_EDIT = 'AD_BOX_EDIT';

      const AD_MAIN_ADD = 'AD_MAIN_ADD';
      const AD_SUB_ADD = 'AD_SUB_ADD';
      
      const AD_MAIN_SELECT = 'AD_MAIN_SELECT';
      const AD_SUB_SELECT = 'AD_SUB_SELECT';


      const hs_new_box = (text, prev_box_id) => ({type:HS_NEW_BOX, text: text, prev_box_id: prev_box_id});
      const hs_box_add = (text, box_id) => ({type:HS_BOX_ADD, text: text, box_id:box_id});
      const hs_box_edit = (text, box_id, idx) => ({type:HS_BOX_EDIT, text: text, box_id:box_id, idx: idx});
      const hs_box_active = (box_id, idx) => ({type:HS_BOX_ACTIVE, box_id:box_id, idx: idx});

      const as_new_box = (text, prev_box_id) => ({type:AS_NEW_BOX, text: text, prev_box_id: prev_box_id});
      const as_box_edit = (box_id, text) => ({type:AS_BOX_EDIT, text: text, box_id:box_id});
      const as_select = (box_id, prev_box_id) => ({type:AS_SELECT, box_id: box_id, prev_box_id:prev_box_id});

      const ad_new_box = (main, sub, prev_box_id) => ({type:AD_NEW_BOX, main: main, sub: sub , prev_box_id: prev_box_id});
      const ad_box_edit = (box_id, main, sub) => ({type: AD_BOX_EDIT, box_id: box_id, main: main, sub: sub});

      const ad_main_add = (prev_box_id,box_id, text) => ({type: AD_MAIN_ADD, box_id:box_id, text: text, prev_box_id: prev_box_id});
      const ad_sub_add = (box_id, text, main_idx) =>({type: AD_SUB_ADD, main_idx: main_idx, text: text, box_id:box_id});

      const ad_main_select = (prev_box_id, box_id, main_idx) =>({type: AD_MAIN_SELECT,prev_box_id: prev_box_id, main_idx: main_idx, box_id: box_id});
      const ad_sub_select = (box_id, sub_idx) =>({type: AD_SUB_SELECT, box_id: box_id, sub_idx: sub_idx});

      const initialState = {
        boxes:[],
        ad:[
         
        ],
      };

      const counter = (state = initialState, action) => {

        let box_id = state.boxes.length + 1;

        switch(action.type) {

          case HS_NEW_BOX:

            state.boxes.push(
              {
                id: box_id, 
                action: 'hs',
                active: 0,
                cases:[
                  {
                    content: action.text,
                    next: 0
                  }
                ]
              });

            if(box_id - 1){
              if(state.boxes[action.prev_box_id - 1].action == 'ad'){
                let prev_box = state.boxes[action.prev_box_id - 1];
                let main = prev_box.active.main;
                let sub = prev_box.active.sub;
                let ad = state.ad;
                if(ad[main].sub.length){
                  let sub = prev_box.active.sub;
                  let main_text = ad[main].main;
                  let sub_text = ad[main].sub[sub];
                  prev_box.cases.push({
                    content: [main_text, sub_text],
                    next: box_id,
                  });
                }else{
                  let main_text = ad[main].main;
                  prev_box.cases.push({
                    content: [main_text, main_text],
                    next: box_id,
                  });

                }
              }else{
                state.boxes[action.prev_box_id - 1].cases[0].next = box_id;
              }
                
            }

            return state;

          case HS_BOX_ADD:

            state.boxes[action.box_id - 1].cases.push(
              {
                content: action.text,
                next: 0
              });

            return state;

          case HS_BOX_EDIT:

            state.boxes[action.box_id - 1].cases[action.idx].content = action.text;

            return state;

          case HS_BOX_ACTIVE:

            state.boxes[action.box_id - 1].active = action.idx;

            return state;

          case AS_NEW_BOX:
            state.boxes.push(
              {
                id: box_id, 
                action: 'as',
                cases:[{
                  content: action.text,
                  next: 0
                }]
              });
            if(box_id - 1){
              if(state.boxes[action.prev_box_id - 1].action == 'hs'){
                let active = state.boxes[action.prev_box_id - 1].active;
                state.boxes[action.prev_box_id - 1].cases[active].next = box_id;
              }else{
                let prev_box = state.boxes[action.prev_box_id - 1];
                let main = prev_box.active.main;
                let sub = prev_box.active.sub;
                let ad = state.ad;
                if(ad[main].sub.length){
                  let sub = prev_box.active.sub;
                  let main_text = ad[main].main;
                  let sub_text = ad[main].sub[sub];
                  prev_box.cases.push({
                    content: [main_text, sub_text],
                    next: box_id,
                  });
                }else{
                  let main_text = ad[main].main;
                  prev_box.cases.push({
                    content: [main_text, main_text],
                    next: box_id,
                  });

                }
                
              }
            }
            return state;

          case AS_BOX_EDIT:

            state.boxes[action.box_id - 1].cases[0].content = action.text;
            return state;

          case AS_SELECT:
            if(state.boxes[action.prev_box_id - 1].action == 'hs'){
              let active = state.boxes[action.prev_box_id - 1].active;
              state.boxes[action.prev_box_id - 1].cases[active].next = action.box_id;
            }else{
              let prev_box = state.boxes[action.prev_box_id - 1];
                let main = prev_box.active.main;
                let sub = prev_box.active.sub;
                let ad = state.ad;
                if(ad[main].sub.length){
                  let sub = prev_box.active.sub;
                  let main_text = ad[main].main;
                  let sub_text = ad[main].sub[sub];
                  prev_box.cases.push({
                    content: [main_text, sub_text],
                    next: action.box_id,
                  });
                }else{
                  let main_text = ad[main].main;
                  prev_box.cases.push({
                    content: [main_text, main_text],
                    next: action.box_id,
                  });
                }
            }
            return state;

          case AD_MAIN_ADD:
            
            let ad = state.ad;
            ad.push({
              main: action.text,
              sub:[],
            });
            if(action.box_id){
              let box = state.boxes[action.box_id - 1];
              box.active.main = ad.length - 1;
              box.active.sub = 'n';
            }else{
              state.boxes.push(
                {
                  id: box_id, 
                  action: 'ad',
                  active:{ main:ad.length - 1, sub:'n'},
                  cases:[ ],
                  
                });
              if(box_id - 1){
                if(state.boxes[action.prev_box_id - 1].action == 'hs'){
                  let active = state.boxes[action.prev_box_id - 1].active;
                  state.boxes[action.prev_box_id - 1].cases[active].next = box_id;
                }else{
                  state.boxes[action.prev_box_id - 1].cases[0].next = box_id;
                }
              }
            }

            return state;

          case AD_SUB_ADD:
            let box = state.boxes[action.box_id - 1];
            state.ad[action.main_idx].sub.push(action.text);

            box.active.sub = state.ad[action.main_idx].sub.length - 1;

            return state;

          case AD_MAIN_SELECT:
            if(action.box_id){
              let box = state.boxes[action.box_id - 1];
              // let sub = state.ad[action.main_idx].sub.length ? 0 : 'n';
              let sub = 'n';
              box.active.main = action.main_idx;
              box.active.sub = sub;
            }else{
              let sub = 'n';

              state.boxes.push(
                {
                  id: box_id, 
                  action: 'ad',
                  active:{ main:action.main_idx, sub: sub},
                  cases:[ ],
                  
                });
              if(box_id - 1){
                if(state.boxes[action.prev_box_id - 1].action == 'hs'){
                  let active = state.boxes[action.prev_box_id - 1].active;
                  state.boxes[action.prev_box_id - 1].cases[active].next = box_id;
                }else{
                  state.boxes[action.prev_box_id - 1].cases[0].next = box_id;
                }
              }
            }
            
            return state;

          case AD_SUB_SELECT:
            state.boxes[action.box_id - 1].active.sub = action.sub_idx;

            return state;

          default:
            return state;
        }
      }

      const { createStore } = Redux;
      const store = createStore(counter);

      let boxes = [];


      const render = () => {
        $('section .alexa-row').remove();
        if(!store.getState().boxes.length){
          newRow(1,'');
        }else{
          
          boxes = store.getState().boxes;
          showDialog();
        }
      }

      store.subscribe(render);

      render();

      $("#create_test").click(() =>
        {
          let boxes = store.getState().boxes;
          let ad = store.getState().ad;
          let main_text;
          let sub_text;
          boxes.map( box => {
            if(box.action == 'ad' && box.cases.length == 0){
              main_text = ad[box.active.main].main;
              if(box.active.sub != 'n'){
                sub_text = ad[box.active.main].sub[box.active.sub]
              }else{
                sub_text = main_text;
              }
              box.cases.push({
                content: [main_text, sub_text],
                next: 0
              });
              return box;
            }else{
              return box;
            }
          });
		  
		   boxes.map( box => {
            if(box.action == 'ad' && box.cases.length == 1 && box.cases[0].next == 0){
              main_text = ad[box.active.main].main;
              if(box.active.sub != 'n'){
                sub_text = ad[box.active.main].sub[box.active.sub]
              }else{
                sub_text = main_text;
              }
              box.cases[0].content = [main_text, sub_text];
              return box;
            }else{
              return box;
            }
          })
          let str = JSON.stringify(boxes);


          
          str = str.replace(/"/g, "\\\"");
          str = str.replace(/[\?\!\.\']/g, " ");
          
          var ajax_object = {"ajax_url":"http:\/\/noiman.com/\/wp-admin\/admin-ajax.php"};

          
          jQuery.ajax({
              type: 'GET',
              url: ajax_object.ajax_url,
              data:{
                'action':'hello', 
                'param':store.getState().boxes
              },
              beforeSend: function() {
                $("#overlay").fadeIn(300);
              },
              success: function(response) {
                $("#overlay").fadeOut(300, function(){alert("result: " + response);});
              }
          });

        }
      );

      let selected_input;

      /*******  HS ********/

      $(document).on('click', '.add-new', function(){
        if(!$('.new-input').length){
          let len = $(this).parent().find('input').length;
          $(this).before('<input type="text" class="new-input" idx="' + len + '">');
        }
        $('.new-input').focus();
      });

      $(document).on('change', '.hs-box input', function(){
        
        let text = $(this).val();
        let hs_box = $(this).parent();

        if($(this).hasClass('new-input')){ 
          if(!$(this).parent().attr('box_id')){
            let prev_box_id = $(this).parent().parent('.alexa-row').prev().find('.box').attr('box_id');
            store.dispatch(hs_new_box(text, prev_box_id));
          }else{
            let box_id = parseInt(hs_box.attr('box_id'));
            store.dispatch(hs_box_add(text, box_id));
          }
        }else{ 
          let box_id = $(this).parent().attr('box_id');
          let idx = $(this).attr('idx');
          store.dispatch(hs_box_edit(text, box_id, idx));
        }
      });
      
      
      $(document).on('click', '.hs-box input', function(e){
        let box_id = $(this).parent().attr('box_id');
        let idx = $(this).attr('idx');
        let text = $(this).val().trim();

        let active = store.getState().boxes[box_id - 1].active;
        if(active == idx ){
          $(this).focus();
        }else{
          if(idx < store.getState().boxes[box_id - 1].cases.length){
            store.dispatch(hs_box_active(box_id, idx));
          }else{

          }
          
        }
        
      });
      


      /***********AS**********/

      $(document).on('click', '.as', function(){
        if( $('#as-dropdown').css('display') == 'none'){
          $('#as-dropdown').html('');
          let items = store.getState().boxes;
          let cur_boxes = [];
          $(".as.box:not('.new')").each((index, item) => 
            cur_boxes.push(Number(item.attributes.box_id.value))
            );
          alexa_contents = [];

          $.each(items, function (index, item){
            if(item.action == 'as' && !cur_boxes.includes(item.id)){
                alexa_contents.push({box_id: item.id, content:item.cases[0].content});
            }
          });

          alexa_contents = $.unique(alexa_contents);

          $.each(alexa_contents, function(index, text){
            $('#as-dropdown').append('<p class="ad-item" idx="' + text.box_id + '">' + text.content + '</p>');
          });

          let offset = $(this).offset();
          let dropdown = $('#as-dropdown');
          let width = $('.alexa-box').width();
          dropdown.animate({top: offset.top+53 - $('.sub_page_header').offset().top, left: offset.left, width: width}, 10, function(){ $(this).slideDown()});
          selected_input = $(this);
        }
        
      });

      $(document).click(function (e) {
          if (!$(e.target).hasClass("dropdown") && $(e.target).parents("#as-dropdown").length === 0) 
          {
              $("#as-dropdown").slideUp();
          }
      });

      $(document).on('change', '.as', function(){
        let text = $(this).val();
        if($(this).hasClass('new')){
          let prev_box_id = $(this).parent('.alexa-row').prev().find('.box').attr('box_id');
          store.dispatch(as_new_box(text, prev_box_id));
        }else{
          let box_id = parseInt($(this).attr('box_id'));
          store.dispatch(as_box_edit(box_id, text));
        }
        $("#as-dropdown").slideUp();
        // $(this).blur();
      });

      $(document).on('click', '#as-dropdown p', function(e){

        let box_id = $(this).attr('idx');
        let prev_box_id = selected_input.parent('.alexa-row').prev().find('.box').attr('box_id');
        store.dispatch(as_select(box_id, prev_box_id));
        $("#as-dropdown").slideUp();

      });

      $(document).click(function (e) {
          if (!$(e.target).hasClass("dropdown") && $(e.target).parents("#as-dropdown").length === 0) 
          {
              $("#as-dropdown").slideUp();
          }
      });


      /*******    AD    *******/

      $(document).on('click', '.ad.main', function(){
        if( $('#ad-dropdown').css('display') == 'none'){

          $('.ad-item').remove();
          $('.ad-new-input').remove();

          let items = store.getState().ad.map(item => item.main);
          let box_id = $(this).parent().attr('box_id');
          let cases = box_id ? store.getState().boxes[box_id - 1].cases : [];
          let active = cases.map(item => item.content[0]);
          active = $.unique(active);

          $.each(items, function (index, item){
            if(active.includes(item)){
              $('.ad-new-btn').before('<div class="ad-item" idx="' + items.indexOf(item) + '">' +
                                      '<input readonly="readonly" class="isflow" value="' + item + '">' + 
                                    '</div>');
            }else{
              $('.ad-new-btn').before('<div class="ad-item" idx="' + items.indexOf(item) + '">' +
                                      '<input readonly="readonly" value="' + item + '">' + 
                                    '</div>');
            }
            
          });

          let offset = $(this).offset();
          let dropdown = $('#ad-dropdown');
          let width = $('.alexa-box').width();
          dropdown.animate({top: offset.top+53 - $('.sub_page_header').offset().top, left: offset.left, width: width/2}, 10, function(){ $(this).slideDown()});
          selected_input = $(this);
        }
        
      });

      $(document).on('click', '.ad.sub', function(){
        if( $('#sub-ad-dropdown').css('display') == 'none'){

          $('.sub-ad-item').remove();
          $('.sub-ad-new-input').remove();

          let items = store.getState().ad;
          let box_id = $(this).parent().attr('box_id');
          let main_idx = $(this).parent().find('.main').attr('idx');
          let cases = box_id ? store.getState().boxes[box_id - 1].cases : [];
          let active = cases.map(item => item.content[1]);
          active = $.unique(active);

          if($(this).parent().find('.main').attr('idx') + 1){
            let items = store.getState().ad[$(this).parent().find('.main').attr('idx')].sub;

            $.each(items, function (index, item){
              
              if(active.includes(item)){
                $('.sub-ad-new-btn').before('<div class="sub-ad-item" idx="' + items.indexOf(item) + '">' +
                                      '<input readonly="readonly" class="isflow" value="' + item + '">' + 
                                    '</div>');
              }else{
                $('.sub-ad-new-btn').before('<div class="sub-ad-item" idx="' + items.indexOf(item) + '">' +
                                      '<input readonly="readonly" value="' + item + '">' + 
                                    '</div>');
              }
            });

            let offset = $(this).offset();
            let dropdown = $('#sub-ad-dropdown');
            let width = $('.alexa-box').width();
            dropdown.animate({top: offset.top+53 - $('.sub_page_header').offset().top, left: offset.left, width: width/2}, 10, function(){ $(this).slideDown()});
            selected_input = $(this);
          }
          
        }
        
      });

      $(document).on('click', '.ad-new-btn', function(){
        if(!$('.ad-new-input').length){
           $('#ad-dropdown').prepend('<input class="ad-new-input" type="text">');
        }
        
        $('.ad-new-input').focus();
      });

      $(document).on('click', '.sub-ad-new-btn', function(){
        if(!$('.sub-ad-new-input').length){
           $('#sub-ad-dropdown').prepend('<input class="sub-ad-new-input" type="text">');
        }
        
        $('.sub-ad-new-input').focus();
      });

     $(document).on('click', '#ad-dropdown .ad-item input', function(e){
        if($(this).attr('readonly') == 'readonly'){
          let prev_box_id = selected_input.parent().parent('.alexa-row').prev().find('.box').attr('box_id');
          let box_id = selected_input.parent().attr('box_id');
          let idx = $(this).parent().attr('idx');
          $('#ad-dropdown').slideUp();

          store.dispatch(ad_main_select(prev_box_id, box_id, idx));
        }
      });

      $(document).on('click', '#sub-ad-dropdown .sub-ad-item input', function(e){
        if($(this).attr('readonly') == 'readonly'){
          let box_id = selected_input.parent().attr('box_id');
          let idx = $(this).parent().attr('idx');
          $("#sub-ad-dropdown").slideUp();

          store.dispatch(ad_sub_select(box_id, idx));
        }
      });

      $(document).on('change', '.ad-new-input', function(){
        let txt = $(this).val();
        $('.dropdown').slideUp();

        let prev_box_id = selected_input.parent().parent('.alexa-row').prev().find('.box').attr('box_id');

        let box_id = selected_input.parent().attr('box_id');
        box_id = box_id ? box_id : 0 ;

        store.dispatch(ad_main_add(prev_box_id, box_id, txt));
      });

      $(document).on('change', '.sub-ad-new-input', function(){
        let txt = $(this).val();
        let main_idx = selected_input.parent().find('.main').attr('idx');

        let box_id = selected_input.parent().attr('box_id');

        $('.dropdown').slideUp();

        store.dispatch(ad_sub_add(box_id, txt, main_idx));
      });

      $(document).click(function (e) {
          if (!$(e.target).hasClass("dropdown") && $(e.target).parents("#ad-dropdown").length === 0) 
          {
              $("#ad-dropdown").slideUp();
          }
      });

      $(document).click(function (e) {
          if (!$(e.target).hasClass("dropdown") && $(e.target).parents("#sub-ad-dropdown").length === 0) 
          {
              $("#sub-ad-dropdown").slideUp();
          }
      });

      $(document).on('change', '.ad.sub', function(){

        let main = $(this).parent().find('.main').attr('idx');
        let sub = $(this).attr('idx');

        if($(this).parent().hasClass('new')){
          let prev_box_id = $(this).parent().parent('.alexa-row').prev().find('.box').attr('box_id');
          store.dispatch(ad_new_box(main, sub, prev_box_id));
        }else{
          let box_id = parseInt($(this).parent().attr('box_id'));
          store.dispatch(ad_box_edit(box_id, main, sub));
        }
      });

      $(document).on('click', '.ad-new-btn', function(){
        if(!$('.ad-new-input').length){
           $('#ad-dropdown').prepend('<input class="ad-new-input" type="text">');
        }
        
        $('.ad-new-input').focus();
      });

      /******   Common  ******/
      function newRow(id, action){
        let row = '';
        let id_input = '<input class="row-id" type="text" value="' + id + '" disabled>';
        let empty_input = '<div class="alexa-box"></div>';
        let row_start = '<div class="alexa-row" rowid="' + id + '">';
        let row_end = '</div>';
        let hs_input = '<div class="hs-box new box"><button class="add-new">Add New</button></div>';
        let as_input = '<input class="as alexa-box new box" type="text" value="" idx="0">';
        let ad_input = '<div class="alexa-box new box" idx="0"><input  readonly="readonly" class="ad alexa-box main" type="text" value=""><input  readonly="readonly" class="ad alexa-box sub" type="text" value="" idx="0"></div>';
        if(id == 1){
          row = row_start + id_input + hs_input + as_input + ad_input + row_end;
        }else{
          switch(action){
            case 'hs':
              row = row_start + id_input + empty_input + as_input + ad_input + row_end;
              break;
            case 'as':
              row = row_start + id_input + hs_input + empty_input + ad_input + row_end;
              break;
            case 'ad':
              row = row_start + id_input + hs_input + as_input + empty_input + row_end;
              break;
          }
        }
        
        $('.alexa-section').append(row);
        if($('.as.new').length){
          $('.as.new').focus();
        }else{
          $('.hs.new').trigger('click');
        }
      }

      function showDialog(){
        let row_id = 1;
        let box_id = 1;
        let action = '';
        while(box_id){
          let box = boxes[box_id - 1];
          action = box.action;

          if(action == 'hs'){
            let active = box.active;
            let text = box.cases[active].content;
            createRow(row_id, box_id,  box, action, text);
            box_id = box.cases[active].next;
          }else if(action == 'ad'){
            let cases = box.cases;
            let ad = store.getState().ad;
            let cur_main = ad[box.active.main];
            let main_text = cur_main.main;
            let sub_text = box.active.sub == 'n' ? main_text : cur_main.sub[box.active.sub];
            let text = [main_text, sub_text];
            createRow(row_id, box_id, box, action, text);
            let cur_case = box.cases.find(item => JSON.stringify(item.content) == JSON.stringify(text));
            box_id = cur_case ? cur_case.next : 0;
            
          }else{
            let text = box.cases[0].content;
            createRow(row_id, box_id, box, action, text);
            box_id = box.cases[0].next;
          }
          
          ++ row_id;
        }

        newRow(row_id, action);
      }

      function createRow(row_id, box_id, box, action, text){

        let row = '';
        let id_input = '<input class="row-id" type="text" value="' + row_id + '" disabled>';
        let empty_input = '<div class="alexa-box"></div>';
        let row_start = '<div class="alexa-row" rowid="' + row_id + '">';
        let row_end = '</div>';
        switch(action){
          case 'hs':
            let items = box.cases;

            let hs_box = '';

            $.each(items, function (index, item){
              if(index == box.active){
                hs_box = hs_box + '<input type="text" class="active" idx="' + items.indexOf(item) + '" value="' + item.content + '">';
              }else{
                hs_box = hs_box + '<input type="text" idx="' + items.indexOf(item) + '" value="' + item.content + '">';
              }
              
            });
            hs_box = '<div class="hs-box box" box_id="' + box_id + '" content="' + text + '" idx="0">' +
             hs_box + '<button class="add-new">Add New</button></div>';
            row = row_start + id_input + hs_box + empty_input + empty_input + row_end;
            break;
          case 'as':
            row = row_start + id_input + empty_input + '<input class="as alexa-box box" type="text" value="' + text + '" box_id="' + box_id + '"  idx="0">' + empty_input + row_end;
            break;
          case 'ad':
            let ad = store.getState().ad;
            let maintext = text[0];
            let subtext = text[1];
            row = row_start + id_input + empty_input + empty_input + '<div class="alexa-box box" idx="0" ' + '" box_id="' + box_id + '"><input readonly="readonly"  class="ad alexa-box main" type="text" value="' + maintext + '"  idx="' + box.active.main + '"><input readonly="readonly"  class="ad alexa-box sub" type="text" value="' + subtext + '" idx="' + box.active.sub + '"></div>' + row_end;
            break;
        }
        $('.alexa-section').append(row);
      }




    });
  </script>
                
            </div>

        </div>

    </div>
<?php
get_footer();