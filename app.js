window.onload = ()=> {
	let p = document.querySelector(".pricetag")
	let log = document.querySelector("#add")
	let save = document.querySelector("#save")
	let l = []
	log.forEach(log => {
		log.addEventListener("click", l.push(p))
	})
	console.log(l)
} 
