function requisitar() {
	const urls = ''
	const params = {
	    method:'POST'
	    body:JSON.stringify({
	    	nome:'joão',
	    	idade:19
	    })
	};

	fetch(urls,params)
	  .then((r)=>{r.json()})
	  .then(()=>{
	     console.log(json);
	  });
}

async function requisitar2() {
    const urls = ''
	const params = {
	    method:'POST'
	    body:JSON.stringify({
	    	nome:'joão',
	    	idade:19
	    })
	};

	const r = await fetch(urls,params);
	const json = await r.json();

	console.log(json);
}

requisitar();