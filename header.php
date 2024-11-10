<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        .body{
            /* background-color:#373837; */
        }
        .wrapper{
          margin:auto;
          margin-top:10vh;
          /* background-color:#373837; */
          background: #8e918f;
          max-width:450px;
          width:100%;
          /* border: 2px solid black; */
          border-radius:16px;
          box-shadow: 0 0 128px 0 rgba(0,0,0,0.1)
                      0 32px 64px -48px rgba(0,0,0,0.5);
      }
      .wrapper img{
          object-fit:cover;
          border-radius:50%;
      }

      .chat-area header{
        display:flex;
        align-items:center;
        padding:12px 25px;

      }
      .chat-area header img{
        height:45px;
        width: 45px;
        margin:0 15px;

      }
      .chat-area header back-icon{
        color:#3E424B;
        font-size:18px;
        
      }
      .chat-area header .details span{
        font-size:15px;
        font-weight:500;
      }
      .chat-box{
        position:relative;
        min-height:400px;
        max-height:400px;
        overflow-y:auto;
        padding:10px 30px 20px 30px;
        background:#D3D3D3;
        box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
                    inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
      }

      .chat-box .text{
        position:absolute;
        top:45%;
        left:50%;
        width:calc(100% - 50px);
        text-align:center;
        transform:translate(-50%,-50%);
      }
      .chat-box .chat{
        margin:15px 10px;
      }

      .chat-box .chat p{
        word-wrap:break-word;
        padding: 8px 16px;
        box-shadow: 0 0 32px rgb(0 0 0 / 8%),
                    0rem 16px 16px -16px rgb(0 0 0 / 10%);
      }

      .chat-box .outgoing .details{
        margin-left:auto;
        max-width: calc(100% - 130px);
      }

      .outgoing .details p{
        background: #3E424B;
        color:#fff;
        border-radius: 18px 18px 0 18px;

      }

      .chat-box .incoming img{
        height:35px;
        width:35px;
      }

      .chat-box .incoming{
        display:flex;
        align-items:flex-end;
      }

      .chat-box .incoming .details{
        margin-right:auto;
        margin-left: 10px;
        max-width:calc(100% - 130px);
      }

      .incoming .details p{
        background:#fff;
        color:#3E424B;
        border-radius: 18px 18px 18px 0;

      }

      .typing-area{
        padding:15px 25px;
        display:flex;
        justify-content:space-between;
      }

      .typing-area input{
        height:45px;
        width:calc(100% - 58px);
        font-size: 16px;
        padding: 0 13px;
        border: 1px solid #e6e6e6;
        outline:none;
        border-radius:5px 0 0 5px;
      }

      .typing-area button{
        color#fff;
        width:55px;
        border:none;
        outline:none;

       
        background:#3E424B;
        font-size: 19px;
        cursor:pointer;
        opacity: 0.7;
        pointer-events : none;
        border-radius:0 5px 5px 0;
        transition: all 0.3s ease;
      }

      .typing-area button.active{
        opacity:1;
        pointer-events:auto;

      }

      /* Mobile responsive  */

      @media screen and (max-width:450px){
        .form, .users{
            padding:20px;

        }

        .form header{
            text-align:center;
        }

        .form .name-details{
            flex-direction:column;
        }

        .form .name-details.field:first-child{
            margin-right:0px;
        }
        .form .name-details.field:last-child{
            margin-left:0px;
        }

        .users header img{
            height:45px;
            width: 45px;
        }

        :is(.users, .users-list) .content .details{
            margin-left:15px;
        }


        .users-list a{
            padding-right:10px;
        }

        .chat-area header{
            padding:14px 25px;

        }

        .chat-box{
            min-height:400px;
            padding:10px 15px 15px 20px;
        }

        .chat-box .chat p{
            font-size: 15px;
        }

        .chat-box .outgoing .details{
            max-width:230px;

        }

        .chat-box .incoming .details{
            max-width:265px;
        }

        .incoming .details img{
            height:30px;
            width:30px;
        }

        .chat-area form{
            padding:20px;
        }

        .chat-area form input{
            height:40px;
            width:calc(100% - 48px);
        }

        .chat-area form button{
            width: 45px;
        }

      }

     </style>
</head>
