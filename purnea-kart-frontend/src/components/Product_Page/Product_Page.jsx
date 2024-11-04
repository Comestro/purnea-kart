import React, { useState,useEffect } from 'react'
import { fetchProduct, fetchProducts } from '../../services/apiService';
import Button from '../Button';
import { useParams } from 'react-router-dom';


const Product_Page = () => {

    const {slug} = useParams();
    const [product, setProduct] = useState({});
    const [loading,setLoading]= useState('null');
    const [error,setError] = useState('true')
   

    useEffect(()=>{
        const ProductDetail = async ()=>{
            try{
                const product = await fetchProduct(`${slug}`);
                setProduct(product.product);
                setLoading(false)
        }catch(error){
            setError(error)
            setLoading(false)
        }
    }
    ProductDetail();
},[slug])



  return (
    <div className="bg-gray-100 min-h-screen p-4">
            <div>
                <div className="mchProduax-w-6xl mx-auto bg-white p-6 rounded-md shadow-md">
        {/* Top Section */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
          {/* Product Image */}
          <div className="flex justify-center">
            <img
              src="https://via.placeholder.com/400"
              alt="Product"
              className="rounded-md object-cover w-full h-full max-h-96"
            />
          </div>
          
          {/* Product Details */}
          <div className="flex flex-col justify-between space-y-4">
            <h1 className="text-2xl font-semibold text-gray-800">{product.name}</h1>
            <p className="text-xl text-red-600 font-bold">₹{product.price}</p>
            <p className="text-gray-600">Inclusive of all taxes</p>

            {/* Ratings */}
            <div className="flex items-center space-x-2">
              <span className="bg-green-500 text-white px-2 py-1 text-sm rounded">4.3 ★</span>
              <span className="text-gray-600">(12,345 ratings)</span>
            </div>

            {/* Offers */}
            <div className="mt-4">
              <h2 className="font-semibold text-gray-800">Offers</h2>
              <ul className="list-disc list-inside text-gray-600">
                <li>Bank Offer: 10% off on HDFC Bank Credit Cards</li>
                <li>Buy More, Save More</li>
                <li>Get ₹100 Off on first purchase</li>
              </ul>
            </div>

            {/* Action Buttons */}
            <div className="flex space-x-4 mt-4">
              <Button className="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-md font-semibold">Add to Cart</Button>
              <Button className="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-md font-semibold">Buy Now</Button>
            </div>
          </div>
        </div>

        {/* Product Description */}
        <div className="mt-8">
          <h2 className="text-xl font-semibold text-gray-800">Product Details</h2>
          <p className="text-gray-600 mt-2">
            {product.description}
          </p>
        </div>

        {/* Specifications */}
        <div className="mt-8">
          <h2 className="text-xl font-semibold text-gray-800">Specifications</h2>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div className="border-b border-gray-200 py-2">
              <span className="font-semibold text-gray-700">Brand:</span> Brand Name
            </div>
            <div className="border-b border-gray-200 py-2">
              <span className="font-semibold text-gray-700">Color:</span> Black
            </div>
            <div className="border-b border-gray-200 py-2">
              <span className="font-semibold text-gray-700">Model:</span> Model Name
            </div>
            <div className="border-b border-gray-200 py-2">
              <span className="font-semibold text-gray-700">Dimensions:</span> 15 x 10 x 5 cm
            </div>
          </div>
        </div>

        {/* Reviews */}
        <div className="mt-8">
          <h2 className="text-xl font-semibold text-gray-800">Customer Reviews</h2>
          <div className="space-y-4 mt-4">
            {/* Review 1 */}
            <div className="p-4 border border-gray-200 rounded-md">
              <div className="flex items-center justify-between">
                <span className="bg-green-500 text-white px-2 py-1 text-sm rounded">4.0 ★</span>
                <span className="text-gray-600 text-sm">by User123 on Oct 10, 2023</span>
              </div>
              <p className="text-gray-700 mt-2">Great product, really loved it!</p>
            </div>
            {/* Review 2 */}
            <div className="p-4 border border-gray-200 rounded-md">
              <div className="flex items-center justify-between">
                <span className="bg-green-500 text-white px-2 py-1 text-sm rounded">5.0 ★</span>
                <span className="text-gray-600 text-sm">by User456 on Sep 28, 2023</span>
              </div>
              <p className="text-gray-700 mt-2">Exceeded my expectations. Highly recommend!</p>
            </div>
          </div>
        </div>
      </div>
            </div>
        
      
    </div>
  );
};

export default Product_Page;
