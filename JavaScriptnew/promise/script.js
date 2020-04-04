function fazer() {
	return new Promise((resolve,reject)=>{
      resolve('OK');
	});
}

fazer().then((res)=>{
   console.log(res);   
});

//espera uma respostas...