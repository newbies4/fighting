# no output
SELECT * 
FROM tbl_car_profile 
	INNER JOIN tbl_reserve 
    	ON tbl_car_profile.car_id = tbl_reserve_details.car_id_fk
    LEFT OUTER JOIN tbl_reserve_details
    	ON tbl_reserve.reserve_id = tbl_reserve_details.reserve_id_fk



SELECT dashboard_data.headline, dashboard_data.message, dashboard_messages.image_id, images.filename
FROM dashboard_data 
    INNER JOIN dashboard_messages 
        ON dashboard_message_id = dashboard_messages.id
    LEFT OUTER JOIN images
        ON dashboard_messages.image_id = images.image_id 

# working
SELECT * FROM
tbl_reserve_details
    INNER JOIN tbl_reserve
    ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id

SELECT * FROM
tbl_car_profile
    LEFT OUTER JOIN tbl_reserve_details
    ON tbl_car_profile.car_id = tbl_reserve_details.car_id_fk


SELECT * FROM
tbl_car_profile
    LEFT JOIN tbl_reserve_details
    	ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    LEFT JOIN tbl_reserve
    	ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id


SELECT * FROM
tbl_car_profile
    LEFT JOIN tbl_reserve_details
    	ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    LEFT JOIN tbl_reserve
    	ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id
    WHERE tbl_reserve.start_date > '2019-10-1'


SELECT * FROM
tbl_car_profile
    LEFT JOIN tbl_reserve_details
    	ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    LEFT JOIN tbl_reserve
    	ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id
    WHERE NOT tbl_reserve.start_date > '2019-10-1' AND NOT tbl_reserve.end_date < '2019-11-30'


#working sql for displaying cars in home page with date range
SELECT * FROM
tbl_car_profile
    LEFT JOIN tbl_reserve_details
    	ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    LEFT JOIN tbl_reserve
    	ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id
    WHERE NOT (tbl_reserve.start_date < '2019-10-1' AND tbl_reserve.end_date > '2019-11-30') OR (tbl_reserve.start_date IS null)


SELECT *
FROM tbl_car_profile 
	LEFT JOIN tbl_reserve_details 
		ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id 
	LEFT JOIN tbl_reserve 
		ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id 
	WHERE ((tbl_reserve.start_date NOT BETWEEN '2019-10-1' AND '2019-12-12') AND (tbl_reserve.end_date NOT BETWEEN '2019-10-1' AND '2019-12-12')) 
	OR (tbl_reserve.start_date IS null)


#this is the final sql to display cars
SELECT car_id, car_model, car_price, car_pic_name
FROM tbl_car_profile 
	LEFT JOIN tbl_car_pic
    	ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
	LEFT JOIN tbl_reserve_details 
		ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id 
	LEFT JOIN tbl_reserve 
		ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id 
	WHERE ((tbl_reserve.start_date NOT BETWEEN '2019-11-28' AND '2019-12-11') AND (tbl_reserve.end_date NOT BETWEEN '2019-11-28' AND '2019-12-11')) 
	OR (tbl_reserve.start_date IS null)
    GROUP BY car_id, car_model, car_price


SELECT (end - start) as Days FROM tbl_storeroom

SELECT * FROM tbl_storeroom INNER JOIN tbl_car_profile ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id


SELECT * FROM tbl_storeroom 
    INNER JOIN tbl_car_profile 
        ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
    INNER JOIN tbl_customer
        ON tbl_customer.customer_id = tbl_storeroom.customer_id_fk



SELECT car_model, car_pic_name, car_price, (end - start) as Days FROM tbl_storeroom 
    INNER JOIN tbl_car_profile 
        ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
    INNER JOIN tbl_customer
        ON tbl_customer.customer_id = tbl_storeroom.customer_id_fk
    INNER JOIN tbl_car_pic
        ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
    GROUP BY car_model, car_pic_name, car_price

SELECT car_model, car_pic_name, car_price, (end - start) as Days FROM tbl_storeroom 
    INNER JOIN tbl_car_profile 
        ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
    INNER JOIN tbl_customer
        ON tbl_customer.customer_id = tbl_storeroom.customer_id_fk
    INNER JOIN tbl_car_pic
        ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
    GROUP BY car_model, car_price



#reservation details
SELECT * FROM tbl_reserve
    JOIN tbl_reserve_details
        ON tbl_reserve.reserve_id = tbl_reserve_details.reserve_id_fk
    JOIN tbl_customer
        ON tbl_reserve.customer_id_fk = tbl_customer.customer_id
    JOIN tbl_car_profile
        ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    WHERE reserve_id = '52'


SELECT *,(end_date - start_date) as days FROM tbl_reserve
    JOIN tbl_reserve_details
        ON tbl_reserve.reserve_id = tbl_reserve_details.reserve_id_fk
    JOIN tbl_customer
        ON tbl_reserve.customer_id_fk = tbl_customer.customer_id
    JOIN tbl_car_profile
        ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id
    JOIN tbl_car_pic
        ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
    WHERE reserve_id = '52'
    GROUP BY car_owner, car_model, car_brand, car_platenumber


#account setting, user side query
SELECT * FROM tbl_useraccount
    JOIN tbl_customer
        ON tbl_useraccount.customer_id_fk = tbl_customer.customer_id
    WHERE username = 'haidz'









