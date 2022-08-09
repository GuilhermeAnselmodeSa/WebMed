// replace these values with those generated in your Video API account
var apiKey = "47518511";
var sessionId = "1_MX40NzUxODUxMX5-MTY2MDA2MTQxNjA2Nn5vbGJqcWtVeGlUTmdHMzdEZ3BBQllCK01-fg";
var token = "T1==cGFydG5lcl9pZD00NzUxODUxMSZzaWc9ZDg3YTQ5OTFhOTQyNmRjZDQwYzRkZmJhMjc3OWEzMmViY2UwN2FkNDpzZXNzaW9uX2lkPTFfTVg0ME56VXhPRFV4TVg1LU1UWTJNREEyTVRReE5qQTJObjV2YkdKcWNXdFZlR2xVVG1kSE16ZEVaM0JCUWxsQ0swMS1mZyZjcmVhdGVfdGltZT0xNjYwMDYxNDk5Jm5vbmNlPTAuMjk3MDMyNTM2MDQ2MzQ5NyZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNjYwMDY1MDk4JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";
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
