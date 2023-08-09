
Array.from(document.querySelectorAll('.notification-list_detail')).forEach(item=>
    {
         item.onclick =function()
         {
             item.parentElement.parentElement.classList.toggle("see-more");
         }
    })
    Array.from(document.querySelectorAll('.event_image')).forEach(item=>    
    {
     item.onclick = function()
     {
        img = document.createElement('img');
        img.setAttribute('src', item.src);
        img. classList.add('detail-img');
         document.querySelector('.overlay-wrapper').appendChild(img);
         document.querySelector('.overlay-wrapper').style.display = "block";
         document.querySelector('.overlay-wrapper .record-container').style.display='none';
     }
    })
    document.querySelector('.overlay').onclick =function()
    {
         document.querySelector('.overlay-wrapper').style.display = "none";
         document.querySelector('.overlay-wrapper img').remove();
    }
    document.querySelector('.overlay2').onclick =function()
    {
         document.querySelector('.overlay-wrapper2').style.display = "none";
       
        //  document.querySelector('.overlay-wrapper2').innerHTML = null;
    }
    Array.from(document.querySelectorAll('.notification-list')).forEach(item=>
        {
            const acceptBtn = item.querySelector('.execute-status .accept');
            const denyBtn =  item.querySelector('.execute-status .deny');
            const receivedBtn = item.querySelector('.receive-btn');
            const executeStatus  = item.querySelector('.execute-status');
            if(receivedBtn)
            {
                receivedBtn.onclick = ()=>{
                    receivedBtn.classList.add('hidden');
                    executeStatus.classList.add('show');
                }
            }
            if(acceptBtn)
                if(denyBtn)
                    acceptBtn.onclick = ()=>denyBtn.style.display = 'none';
            if(denyBtn)
                if(acceptBtn)
                denyBtn.onclick = ()=>acceptBtn.style.display = 'none';
        });
        if(document.querySelector('.new-record'))
        {
            document.querySelector('.new-record').onclick =  ()=>
            {
                document.querySelector('.overlay-wrapper').style.display = "block";
                document.querySelector('.overlay-wrapper .record-container').style.display = "flex";
                document.querySelector('.overlay-wrapper .record-container .record-container_title').innerText = "Sự Kiện Mới";
                document.querySelector('.overlay-wrapper .record-container form input[name="record-type"]').value = "event";

                // document.querySelector('.overlay-wrapper img').remove();
            }
        }
        if(document.querySelector('.new-news'))
        {
            document.querySelector('.new-news').onclick =  ()=>
            {
                document.querySelector('.overlay-wrapper').style.display = "block";
                document.querySelector('.overlay-wrapper .record-container').style.display = "flex";
                document.querySelector('.overlay-wrapper .record-container .record-container_title').innerText = "Tin Tức Mới";
                document.querySelector('.overlay-wrapper .record-container form input[name="record-type"]').value = "news";
                // document.querySelector('.overlay-wrapper .record-container form input[name="record-status]').value = "new";
                
                // document.querySelector('.overlay-wrapper img').remove();
            }
        }
        document.querySelectorAll('.edit-new_btn').forEach(item=>{
                item.onclick = function(e)
                {
                    document.querySelector('.overlay-wrapper2').style.display = "block";
                    document.querySelector('.overlay-wrapper2 .record-container').style.display = "flex";
                    document.querySelector('.overlay-wrapper2 .overlay-content .record-container .record-container_title').innerText = "Sửa tin tức";
                    // document.querySelector('.overlay-wrapper .record-container form input[name="record-type"]').value = "news";
                }
        })
        document.querySelectorAll('.edit-event_btn').forEach(item=>{
            item.onclick = function(e)
            {
                document.querySelector('.overlay-wrapper2').style.display = "block";
                document.querySelector('.overlay-wrapper2 .record-container').style.display = "flex";
                document.querySelector('.overlay-wrapper2 .overlay-content .record-container .record-container_title').innerText = "Sửa sự kiện";
                // document.querySelector('.overlay-wrapper .record-container form input[name="record-type"]').value = "news";
            }
    })

// console.log(document.querySelector('.text-center input[name="load-more"]'));
// document.querySelector('.text-center input[name="load-more"]').value = document.querySelector('.notification-ui_dd-content input[name="category"]').value;
// console.log(document.querySelector('.text-center input[name="load-more"]').value);
