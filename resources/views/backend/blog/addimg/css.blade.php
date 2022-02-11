<style>
	ul.img-lists{
	    margin: 0;
	    padding: 0;
	}
	ul.img-lists li{
	    list-style: none;
	    display: inline-block;
	    text-align: center;
	    width: 32.222%;
    	padding: 0px 2px 5px 0;
	}
	ul.img-lists li img{
	    width: 100%;
	    max-height: 98px;
	}
	ul.img-lists li div.add-img {
	    width: 100%;
	    height: 125px;
	    background: #fff;
	    border: 2px dashed #eee;
	    color: #ccc;
	    cursor: pointer;
	    font-size: 20px;
	    padding: 45px 0;
	    font-weight: bold;
	}
	ul.img-lists li div.add-img:hover{
	    border: 2px dashed #ccc;
	    color: green;
	}
	div.img-lists-block{
	    display: inline;
	}
	i.del-img{
	    cursor: pointer;
	}
	i.del-img:hover{
	    color: red;
	}
	span.img-sequence{
	    background-color: #fff;
	    padding: 0px 4px;
	    font-size: 13px;
	    position: absolute;
	}
	._important{
	    color: red;
	}
	@media (max-width: 991px){
		ul.img-lists li div.add-img {
			height: 93px !important;
			padding: 33px 0 !important;
		}
	}
</style>