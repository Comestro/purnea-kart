import React, { useState } from 'react'
import { useDispatch } from 'react-redux'


function HeartButton() {
    const [isWishlist, setisWishlist] = useState('false')
    const dispatch = useDispatch();
    
   const handleClick = ()=>{
      if()
   }
  return (
    <div>
        <div>	&#x1F90D</div>
        <div>	&#x2764</div>
    </div>
  )
}

export default HeartButton