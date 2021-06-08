class MessageUser{
	constructor(id, mensaje, used){
		this.id = id;
		this.mensaje = mensaje;
        this.used = used;
	}
}

class MessageBot{
	constructor(id, mensaje){
		this.id = id;
		this.mensaje = mensaje;
	}
}

class MessageChat{
	constructor(idMessage, entity){
		this.idMessage = idMessage;
        this.entity = entity;
	}
}

class DataBase{

    static listMessage(){
       
       let list = [
           'Hola!', // PRIMERA PREGUNTA 
           '¿Cuáles son sus servicios?', // SEGUNDA PREGUNTA
           '¿Quiénes son?', // TERCERA PREGUNTA
           'Me interesa uno de sus servicios', // CUARTA PREGUNTA 
           '¿Cómo puedo contactarlos?', // QUINTA PREGUNTA
           '¿Cuáles son sus precios?', // SEXTA PREGUNTA 
           '¿En dónde están ubicados?', // SEPTIMA PREGUNTA
           '¿Cuáles son los requisitos para contratar un servicio?', // OCTABA PREGUNTA
       ];

       LocalStorage.deleteAll('Incrementum_MessageUser');

        list.forEach((fetch, index) => {
            var Message = new MessageUser(index, fetch, false);
            LocalStorage.addInsert('Incrementum_MessageUser', Message)
		});
    
    }

    static listMessagBot(){
        let listBot = [
            
            // PRIMERA RESPUESTA
            'Hola!',
            
            // SEGUNDA RESPUESTA
            `Nuestros servicios son los siguientes
            <ul style="list-style: circle">
                    <li><b>ASESORÍA</b></li> 
                    <li><b>FINANCIAMIENTOS</b></li> 
                    <li><b>EMISIONES DE DEUDAS</b></li> 
                    <li><b>GARANTÍAS BANCARIAS</b></li> 
                    <li><b>PRODUCTOS FIDUCIARIOS</b></li>
                    <li><b>VALORIZACIÓN DE EMPRESAS</b></li>
                    <li><b>CONSULTORÍAS ESPECIALIZADAS</b></li>
                    <li><b>SISTEMAS DE RIESGOS</b></li>
            </ul>`,
            
            // TERCERA RESPUESTA
            `Somos una firma peruana de asesoría financiera 
            que realiza actividades de banca inversión con aliados del 
            sistema financiero local e internacional.`,


            // CUARTA RESPUESTA
            `Escríbenos en el formulario de contacto, deja tus datos, el servicio en el que estarías interesado 
            y muy pronto nos comunicaremos contigo para una atención personalizada. `,
             
            // QUINTA RESPUESTA
            `Escríbenos en el formulario de contacto y 
            muy pronto nos comunicaremos contigo para una 
            atención personalizada.`,

            // SEXTA RESPUESTA
            `Los precios de cada servicio son variantes dependiendo de tus necesidades, Escríbenos en el formulario de contacto y muy pronto nos comunicaremos contigo.            `,

            // SEPTIMA RESPUESTA
            `Estamos ubicados en Lima- Perú`,

            // OCTABA RESPUESTA\
            `Los requisitos de cada servicio son variantes dependiendo 
            de tus necesidades, Escríbenos en el formulario de contacto 
            y muy pronto nos comunicaremos contigo.`
        ];
        
        LocalStorage.deleteAll('Incrementum_MessageBot');

        listBot.forEach((fetch, index) => {
            var Message = new MessageBot(index, fetch);
            LocalStorage.addInsert('Incrementum_MessageBot', Message);
		});
    }
}

class LocalStorage{
    
    static getSelect(database){

        let data;

        if(localStorage.getItem(database) === null){

            data = [];

        } else {

            data = JSON.parse(localStorage.getItem(database));

        }

        return data;
    }


    static addInsert(database, datos){
        let data = LocalStorage.getSelect(database);
        
        data.push(datos);
        

        localStorage.setItem(database, JSON.stringify(data));
    }

    static deleteAll(database){
        let data = LocalStorage.getSelect(database);

        data.forEach((index) =>{

            data.splice(index);

        });
        
        localStorage.setItem(database, JSON.stringify(data));

    }

    static where(database, condicional, condicionalValue, limit){
        let data = LocalStorage.getSelect(database);

        let dataReturn = [];

        var i = 0;

        data.forEach((fetch) => {

            if(fetch[condicional] === condicionalValue){

  
                if(limit != null && i < limit){
                    
                
                    dataReturn[i] = fetch;

                    
                    i++;


                } else if(limit === null){

                    dataReturn[i] = fetch;

                    i++;

                }

            }

        });

        return dataReturn;

    }

    static update(database, condicional, condicionalValue, campUpdate, valueUpdate){

        let data = LocalStorage.getSelect(database);


        data.forEach((fetch, index) => {

            if(fetch[condicional] === condicionalValue){

                data[index][campUpdate] = valueUpdate;
            }

        });
        console.log(data);

        localStorage.setItem(database, JSON.stringify(data));

    }
}




class chatBot{

    static getAllMessageUser(limit){

        let chatBody = document.getElementById('MessageUser');

        let data = LocalStorage.where('Incrementum_MessageUser', 'used', false, limit);

        let options = document.getElementsByClassName('messageOption');

        if(data.length === 0 && options.length === 0){

            this.restart();

        } else {
    
            data.forEach((fetch) =>{

                LocalStorage.update('Incrementum_MessageUser', 'id', fetch['id'], 'used', true);

                this.button(fetch, chatBody);

            });

        }

    }

    static button(fetch, chatbody){

        let div = document.createElement('div');

            div.className = 'col-12 p-1 messageOption';

            div.id = `Message-${fetch['id']}`;
            
            div.innerHTML = `<button>
                                ${fetch['mensaje']}
                            </button>`;

            div.setAttribute('onclick', `pushMessage(${fetch['id']})`);

            chatbody.append(div);

    }

    static restart(){

        LocalStorage.update('Incrementum_MessageUser', 'used', true, 'used', false);

        this.getAllMessageUser(3);

    }

    static pushMessage(database, index){

        try {
            let MessageUser = LocalStorage.where(database, 'id', index, null);

            this.setMessage(MessageUser[0], database);
            
        } catch {
            alert('Ha ocurrido un error');
        }

        let chatbody = document.querySelector('#chatbot .body');
    
        chatbody.scrollTop = chatbody.scrollHeight;

    }

    static changeStatus(database, index){
        let Message = LocalStorage.where(database, 'id', index, 1);
        
    }

    static setMessage(message, database){

        let listMessage = document.getElementById('AllMessage');

        let div = document.createElement('div');
        

        if(database === 'Incrementum_MessageUser'){

            div.className = 'col-12 userMessage';

            div.innerHTML = `<p class="p-0 m-0">tu</p>
                            <span>${message['mensaje']}</span>`;
            

        } else {

            div.className = 'col-12 botMessage';

            div.innerHTML = `<p class="p-0 m-0" style="text-align:right;">Asistente</p>
                             <span>${message['mensaje']}</span>`;

        }

        listMessage.append(div);
    }

    static newMessage(){
        
       this.getAllMessageUser(1);

    }
}

function pushMessage(index){

    let button = document.querySelector('#Message-'+index);

    button.remove();

    chatBot.pushMessage('Incrementum_MessageUser', index);

    setTimeout(function(){

        chatBot.pushMessage('Incrementum_MessageBot', index);

        chatBot.newMessage('Incrementum_MessageUser', index);

    }, 1000);

}

DataBase.listMessage();

DataBase.listMessagBot();

chatBot.getAllMessageUser(3);