// replace these values with those generated in your Video API account
var apiKey = "47518511";
var sessionId = "2_MX40NzUxODUxMX5-MTY1NTIyMTE4NDIzOX40bGN6UmJnTU02UG1OMHl5eVVTUmJDMzd-fg";
var token = "T1==cGFydG5lcl9pZD00NzUxODUxMSZzaWc9YThkZjAxN2ZmNmU2ZDAyNjBkMzNlNGNlZGYwNjFmNTQ2MTc1YTViYjpzZXNzaW9uX2lkPTJfTVg0ME56VXhPRFV4TVg1LU1UWTFOVEl5TVRFNE5ESXpPWDQwYkdONlVtSm5UVTAyVUcxT01IbDVlVlZUVW1KRE16ZC1mZyZjcmVhdGVfdGltZT0xNjU1MjIxMjA4Jm5vbmNlPTAuMjAzNjA2MTU2MjE0Njg1MTQmcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTY1NzgxMzIwNyZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PQ==";

// alerta os erros
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}

// (optional) add server code here
initializeSession();

function initializeSession() {
  var session = OT.initSession(apiKey, sessionId);

  // Subscreve a sessãopara uma nova
  session.on('streamCreated', function(event) {
    session.subscribe(event.stream, 'subscriber', {
      insertMode: 'append',
      width: '100%',
      height: '100%'
    }, handleError);
  });

  // Cria um publisher, que seria uma das partes da chamada
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);

  // Conecta-se a sessao
  session.connect(token, function(error) {
    //se a conexao funcionar, inicia-se a chamada
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}
