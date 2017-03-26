
/*
Script Name: Social Button Script
Description: 主要SNSのボタンをまとめて設置できるスクリプト。
Author: 谷 元博 ( Motohiro Tani )
Version: 1.0
Author URI: http://www.1-firststep.com/
Create: 2015/11/24
Last Update: 2015/11/24 制作・公開
*/




$(function(){



  var url = encodeURI(location.href);
  var title = encodeURI(document.title);


  var div_social = document.getElementById('social-button1');


  var social_ul = document.createElement('ul');
  social_ul.className = 'social-button';
  div_social.appendChild(social_ul);




  var facebook_li = document.createElement('li');
  facebook_li.className = 'facebook';
  facebook_li.innerHTML = '<a href="http://www.facebook.com/sharer.php?t=' +title+ '&u=' +url+ '" target="_blank" rel="nofollow"></a><span></span>';
  social_ul.appendChild(facebook_li);


  $.ajax({

    url : 'http://graph.facebook.com/?id=' +url,
    dataType : 'jsonp',

    success : function( obj ){

      if( typeof( obj.shares ) == 'undefined' ){
        count = 0;
      }else{
        count = obj.shares;
      }
      $( 'ul.social-button li.facebook span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.facebook span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });




  var twitter_li = document.createElement('li');
  twitter_li.className = 'twitter';
  twitter_li.innerHTML = '<a href="http://twitter.com/share?text=' +title+ '&url=' +url+ '" target="_blank" rel="nofollow"></a>';
  social_ul.appendChild(twitter_li);






  var google_li = document.createElement('li');
  google_li.className = 'google';
  google_li.innerHTML = '<a href="https://plus.google.com/share?url=' +url+ '" target="_blank" rel="nofollow"></a><span></span>';
  social_ul.appendChild(google_li);


  $.ajax({
    type : 'get',
    dataType : 'xml',
    url : 'http://query.yahooapis.com/v1/public/yql',
    data : {
      q : 'SELECT content FROM data.headers WHERE url="https://plusone.google.com/_/+1/fastbutton?hl=ja&url=' +url+ '" and ua="#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36"',
      format : 'xml',
      env : 'http://datatables.org/alltables.env'
    },
    success : function( data ){
      var content = $(data).find( 'content' ).text();
      var match = content.match(/window\.__SSR[\s*]=[\s*]{c:[\s*](\d+)/i);
      var count = (match != null) ? match[1] : 0;

      $( 'ul.social-button li.google span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.google span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });




  var hatena_li = document.createElement('li');
  hatena_li.className = 'hatena';
  hatena_li.innerHTML = '<a href="http://b.hatena.ne.jp/add?mode=confirm&title=' +title+ '&url=' +url+ '" target="_blank" rel="nofollow"></a><span></span>';
  social_ul.appendChild(hatena_li);


  $.ajax({

    url : 'http://api.b.st-hatena.com/entry.count?url=' +url,
    dataType : 'jsonp',

    success : function( count ){
      if( typeof( count ) == 'undefined' ){
        count = 0;
      }

      $( 'ul.social-button li.hatena span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.hatena span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });


});
$(function(){



  var url = encodeURI(location.href);
  var title = encodeURI(document.title);


  var div_social = document.getElementById('social-button2');


  var social_ul = document.createElement('ul');
  social_ul.className = 'social-button';
  div_social.appendChild(social_ul);




  var twitter_li = document.createElement('li');
  twitter_li.className = 'twitter';
  twitter_li.innerHTML = '<a href="http://twitter.com/share?text=' +title+ '&url=' +url+ '" target="_blank" rel="nofollow">ツイートする</a>';
  social_ul.appendChild(twitter_li);




  var facebook_li = document.createElement('li');
  facebook_li.className = 'facebook';
  facebook_li.innerHTML = '<a href="http://www.facebook.com/sharer.php?t=' +title+ '&u=' +url+ '" target="_blank" rel="nofollow">Facebook</a><span></span>';
  social_ul.appendChild(facebook_li);


  $.ajax({

    url : 'http://graph.facebook.com/?id=' +url,
    dataType : 'jsonp',

    success : function( obj ){

      if( typeof( obj.shares ) == 'undefined' ){
        count = 0;
      }else{
        count = obj.shares;
      }
      $( 'ul.social-button li.facebook span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.facebook span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });




  var google_li = document.createElement('li');
  google_li.className = 'google';
  google_li.innerHTML = '<a href="https://plus.google.com/share?url=' +url+ '" target="_blank" rel="nofollow">Google+</a><span></span>';
  social_ul.appendChild(google_li);


  $.ajax({
    type : 'get',
    dataType : 'xml',
    url : 'http://query.yahooapis.com/v1/public/yql',
    data : {
      q : 'SELECT content FROM data.headers WHERE url="https://plusone.google.com/_/+1/fastbutton?hl=ja&url=' +url+ '" and ua="#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36"',
      format : 'xml',
      env : 'http://datatables.org/alltables.env'
    },
    success : function( data ){
      var content = $(data).find( 'content' ).text();
      var match = content.match(/window\.__SSR[\s*]=[\s*]{c:[\s*](\d+)/i);
      var count = (match != null) ? match[1] : 0;

      $( 'ul.social-button li.google span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.google span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });




  var hatena_li = document.createElement('li');
  hatena_li.className = 'hatena';
  hatena_li.innerHTML = '<a href="http://b.hatena.ne.jp/add?mode=confirm&title=' +title+ '&url=' +url+ '" target="_blank" rel="nofollow">はてなブックマーク</a><span></span>';
  social_ul.appendChild(hatena_li);


  $.ajax({

    url : 'http://api.b.st-hatena.com/entry.count?url=' +url,
    dataType : 'jsonp',

    success : function( count ){
      if( typeof( count ) == 'undefined' ){
        count = 0;
      }

      $( 'ul.social-button li.hatena span' ).html( count );
    },

    error : function(){
      $( 'ul.social-button li.hatena span' ).html( '0' );
    },

    complete : function(){
      return false;
    }

  });


});