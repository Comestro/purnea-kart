import React from 'react';
import LoginPopup from '../SellerLogin';
import Input from '../Input';

function BecomeSeller() {
  return (
    <>
      <div className='forced-color-adjust-none font-light font-sans text-xs pl-5 py-3 border-b-2'>
      <p>Existing Seller?Explore our recomandation with Archana Selection</p>
      </div>
      <div className='flex justify-between '>
        <div className='header  flex items-start justify-center space-x-10 pt-3 pl-44'>
            <div>sell Online</div>
            <div>Fees and commission</div>
            <div>Grow</div>
            <div>Learn</div>
        </div>
        <div className='header  flex items-start justify-center space-x-10 mr-7'>  
            <div className='pt-3'>
                <LoginPopup/>
            </div>
            <div className='bg-yellow-200 text-black py-3 px-4 font-size-xl '>Start Selling</div>
           
        </div>
      </div>
      
      
    </>
  );
}

export default BecomeSeller;
