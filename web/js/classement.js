function natsortTable(table){
    var heads,i=-1;
    table.onclick=function(event){
        var col=event.target;
        if(col.tagName=='TH'){
            var rowSelector=this.rows[0].getElementsByTagName('th')==null?1:0;
            var cols=this.rows[rowSelector].getElementsByTagName('th'),i=-1,j=0,k,elements=[],temp,node,results=[],current;
            while(cols[++i]!=col){}
            while(this.rows[++j]){
                node=this.rows[j].getElementsByTagName('td')[i];
                if(!node.hasOwnProperty('encodedValue')){
                    k=-1;
                    node.encodedValue=[];
                    while(node.innerHTML[++k]){
                        node.encodedValue.push(node.innerHTML.charCodeAt(k));
                    }
                }
                elements.push(node);
            }
            i=0;
            results[0]=elements[0];
            while(elements[++i]){
                j=0;
                current=elements[i];
                while(current){
                    k=-1;
                    if(results[j]){
                        if(!isNaN(current.innerHTML)&&!isNaN(results[j].innerHTML)){
                            if(Number(current.innerHTML)<Number(results[j].innerHTML)){
                                temp=results[j]||false;
                                results[j]=current;
                                current=temp;
                            }
                        }
                        else if(current==elements[i]){
                            if(current.encodedValue.length>=results[j].encodedValue.length){
                                if(current.encodedValue.length==results[j].encodedValue.length){
                                    while(current==elements[i]&&current.encodedValue[++k]){
                                        if(current.encodedValue[k]<results[j].encodedValue[k]){
                                            temp=results[j]||false;
                                            results[j]=current;
                                            current=temp;
                                        }
                                        else if(current.encodedValue[k]>results[j].encodedValue[k]){
                                            k=current.encodedValue.length;
                                        }
                                    }
                                }
                            }
                        }
                        else{
                            temp=results[j]||false;
                            results[j]=current;
                            current=temp;
                        }
                        j++;
                    }
                    else{
                        results[j]=current;
                        current=false;
                    }
                }
            }
            if(col.ord=='DESC'){
                col.ord='ASC';
            }
            else{
                col.ord='DESC';
                results.reverse();
            }
            i=-1;
            node=this.getElementsByTagName('tbody')[0]||this;
            while(results[++i]){
                node.appendChild(results[i].parentNode);
            }
        }
    };
    i=-1;
    heads=table.getElementsByTagName('th');
    while(heads[++i]){
        heads[i].ord='DESC';
    }
}
// Application de natsortTable à un tableau
natsortTable(document.getElementById('tab'));