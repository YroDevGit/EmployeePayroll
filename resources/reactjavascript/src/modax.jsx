import {useState} from 'react';

function Modal({title, icon, copies}){
    const [shows, setShows] = useState(true);

    const closeModal = ()=>{
        setShows(false);
    }
    return(
        <div align="center">
            {shows==true && <div id='modax'>
            <div className='modax-body'>
                <div className='modax-close'><span>X</span></div>
                <div>
                    <div className='modax-title modax-row'>{title}</div>
                </div>
                <div>
                    <div className='error-icon'>{icon}</div>
                </div>
                <div className='modax-row'>
                    <div className='modax-copy modax-black'>{copies}</div>
                </div>
                <div className='modax-row'><button type='button' onClick={closeModal} className='btn btn-primary'>OKAY</button></div>
            </div>
        </div>}
        </div>
    );
}

export {Modal};