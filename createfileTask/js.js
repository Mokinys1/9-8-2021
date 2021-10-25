// Turite HTML dokumentą, kuriame yra pateiktas vienas div su id=”main”.

// UŽDUOTIS: Sukurti jam (jo vidui) tokį markup naudojant JavaScipt:



// <h2> tag’as su tekstu;
let ch2 = document.createElement('h2');

let ch2Text = document.createTextNode('Hello im h2 tag');

ch2.appendChild(ch2Text);

document.body.appendChild(ch2);

// <p> tag’as su tekstu;
let cP = document.createElement('p');

let cPtext = document.createTextNode('Hello im p tag');

cP.appendChild(cPtext);

document.body.appendChild(cP);


// <ul> tag’as, kurio viduje yra 5 <li> su paveiksliukais;
    let ul=document.createElement('ul');
    for(i=0;i<5;i++)
    {
        let li=document.createElement('li');
        li.innerHTML=`<img src='logo.jpg'>`;
        ul.appendChild(li);
    }
    document.getElementById('main').appendChild(ul);

// <p> tag’as su tekstu.
let cP2 = document.createElement('p');

let cPtext2 = document.createTextNode('Hello im p tag 2');

cP2.appendChild(cPtext2);

document.body.appendChild(cP2);


	

	

	

	


