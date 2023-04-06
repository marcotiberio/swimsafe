const parent = document.getElementById('listingArtists')
const divs = parent.children
const frag = document.createDocumentFragment()
while (divs.length) {
  frag.appendChild(divs[Math.floor(Math.random() * divs.length)])
}
parent.appendChild(frag)
