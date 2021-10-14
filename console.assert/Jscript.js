
function makeParagraph(backgroundColor, fontSize, color, text) {
    document.open()
    document.write(`<p style=" color:${color};font-size: ${fontSize};background-color: ${backgroundColor};">${text}</p>`);
    document.close()
}
    makeParagraph('#3a459e','100px','#cccccc','theese are not the droids you are looking for',);
    console.assert(document.body.children.length = 1);
    console.assert(document.body.querySelector('p') !== null);

