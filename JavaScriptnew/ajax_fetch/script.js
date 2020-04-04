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