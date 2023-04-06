const e=document.getElementById("listingArtists"),t=e.children,n=document.createDocumentFragment();for(;t.length;)n.appendChild(t[Math.floor(Math.random()*t.length)]);e.appendChild(n);
