const Telegraf = require('telegraf')
//const config = require('./config')
//const bot = new Telegraf('1374532531:AAEawsF9gtUnvuEL_ptGodmnKvEwy3YVBrM')
const bot = new Telegraf('1060052653:AAH91PpvYtVf5TxenTk9T3xeD2uPNI8akNg')
var arr = ['535331060','954776791']
//const general = require('./general')
const cron = require('node-cron');
var workAI = 0
var workstat = 0
console.log("1")
var general= () =>{
    if(workstat ==0){
        arr.forEach(element => {
            
        bot.telegram.sendMessage(element,('your last work on general work in not completed, do it today!!'))
            console.log("it works")
            
            //open exiating folder

        });
        console.log("2")
    }
    
    else{
    
        arr.forEach(element => {
            
            bot.telegram.sendMessage(element,('cool, upload code in github'))
                console.log("it works")
                //open new folder
    
        });
        console.log("3")
    }    

    console.log("4") 
}



var work= cron.schedule('20 17 * * *', ()=>{
    arr.forEach(element => {
        console.log("5")
        bot.telegram.sendMessage(element,'mrng!!')      
        bot.telegram.sendMessage(element,'heyaa!! <b>wt do u wanna work on today?</b>',
           
            {
                parse_mode: "HTML", //to use html tags to stye the text
                reply_markup:{
                    inline_keyboard: [
                        [{text: "AI", callback_data: "AI"}],
                        [{text: "general", callback_data: "general"}]
                        
                    ]       

                }	
            
            
            })
          
    });
    console.log("6")
    
    bot.action('AI' ,(ctx) =>{
        workAI = 1;
        console.log("drl")
   
        ctx.deleteMessage() //deletes the option message
        ctx.reply('ok do it!!...')
        console.log("6.")
        //nightAI()
    });
    bot.action('general',(ctx)=>{
        ctx.deleteMessage() 
        ctx.reply('ok do general stuff !!...')
        general()
        
        console.log("gen works!!")
    });

}); 
// var general= (chatid) =>{
//             if(workstat ==0){
//                 //arr.forEach(element => {
                    
//                 bot.telegram.sendMessage(chatid,'your last work on general work in not completed, do it today!!')
//                     console.log("it works")
//                     console.log("8")
//                     //open exiating folder

//             // });
//             }
//             else{
            
//                 //arr.forEach(element => {
                    
//                     bot.telegram.sendMessage(chatid,'cool, upload code in github')
//                         console.log("it works")
//                         console.log("9")
//                         //open new folder
            
//                 //});
//             }    
//         console.log("10")
        
        
// }
       
console.log("11")  

console.log("work")
//work()
bot.launch()