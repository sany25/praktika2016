function savesel(doc)
    {
        if(document.selection) {                
            doc.sel = document.selection.createRange().duplicate();
            }       
    }
    function click_bb(aid,Tag) {
            var Open='<'+Tag+'>';
        var Close='</'+Tag+'>';
        var doc = document.getElementById(aid);
        doc.focus();
        if (window.attachEvent && navigator.userAgent.indexOf('Opera') === -1) {                    
            var s = doc.sel;
            if(s){                          
                var l = s.text.length;
                s.text = Open + s.text + Close;
                s.moveEnd("character", -Close.length);
                s.moveStart("character", -l);                       
                s.select();                
            }
        }   else {                      
            var ss = doc.scrollTop;
            sel1 = doc.value.substr(0, doc.selectionStart);
            sel2 = doc.value.substr(doc.selectionEnd);
            sel = doc.value.substr(doc.selectionStart, doc.selectionEnd - doc.selectionStart);                      
            doc.value = sel1 + Open + sel + Close + sel2;
            doc.selectionStart = sel1.length + Open.length;
            doc.selectionEnd = doc.selectionStart + sel.length;
            doc.scrollTop = ss;                     
        }
        return false;
    }

    function click_bb2(aid,Tag) {
            var Open='<'+Tag+'>';
        var Close='</span>';
        var doc = document.getElementById(aid);
        doc.focus();
        if (window.attachEvent && navigator.userAgent.indexOf('Opera') === -1) {                    
            var s = doc.sel;
            if(s){                          
                var l = s.text.length;
                s.text = Open + s.text + Close;
                s.moveEnd("character", -Close.length);
                s.moveStart("character", -l);                       
                s.select();                
            }
        }   else {                      
            var ss = doc.scrollTop;
            sel1 = doc.value.substr(0, doc.selectionStart);
            sel2 = doc.value.substr(doc.selectionEnd);
            sel = doc.value.substr(doc.selectionStart, doc.selectionEnd - doc.selectionStart);                      
            doc.value = sel1 + Open + sel + Close + sel2;
            doc.selectionStart = sel1.length + Open.length;
            doc.selectionEnd = doc.selectionStart + sel.length;
            doc.scrollTop = ss;                     
        }
        return false;
    }