window.onload = ()=> {
	let p = document.querySelector('input[name="price"]')
	let log = document.querySelector("#add")
	let save = document.querySelector("#save")
	let l = []
	log.addEventListener("click", ()=> {
		l.push(p)
		console.log(l)
	})	
} 
