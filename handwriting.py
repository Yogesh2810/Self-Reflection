
import cv2
import pymysql
import numpy as np
import sys

li1=(sys.argv)

user=li1[1]
file=li1[2]

connection = pymysql.connect(host="localhost",user="root",passwd="",database="be")
cursor = connection.cursor()

li=[["0.jpeg","1.jpeg","2.jpeg","3.jpeg","4.jpeg","5.jpeg","6.jpeg","7.jpeg","8.jpeg","9.jpeg","10.jpeg","11.jpeg","12.jpeg","13.jpeg","14.jpeg","15.jpeg","16.jpeg"],["High Pressure","Average Pressure","Light Pressure","Right Slant","Left Slant","Straight Vertical","Upward Writing","Downward Writing","Wavy Writing","Large Letters","Small Letters","Low Spacing","High Spacing","Garlands","Arcades","Threads","Capitals"],["High Emotional Energy","Good perception and Memory","Introversion","Confident","Less Co-operative","Emotions in Check","Happy Mood","Discouragement","Unstable","Extroverted","Reclusive","Self-Conscious","Independant and Generous","Strong","Creative","Sloppy","Anger"]]

for i in range(17):

    original = cv2.imread("handwriting/"+file)
    image_to_compare = cv2.imread("handwriting/standard/"+li[0][i])
    image_to_compare = cv2.cvtColor(image_to_compare, cv2.COLOR_BGR2GRAY)
    
    sift = cv2.xfeatures2d.SIFT_create()

    kp_1, desc_1 = sift.detectAndCompute(original, None)
    kp_2, desc_2 = sift.detectAndCompute(image_to_compare, None)
    
    index_params = dict(algorithm=0, trees=5)
    search_params = dict()
    flann = cv2.FlannBasedMatcher(index_params, search_params)

    matches = flann.knnMatch(desc_1, desc_2, k=2)

    good_points = []
    for m, n in matches:
        if m.distance < 0.6*n.distance:
            good_points.append(m)

    number_keypoints = 0
    if len(kp_1) <= len(kp_2):
        number_keypoints = len(kp_1)
    else:
        number_keypoints = len(kp_2)

    match = len(good_points) / number_keypoints * 100

    sql = " insert into handwriting_attributes values ('"+user+"','"+file+"','"+li[1][i]+"','"+li[2][i]+"',"+str(match)+")"
    cursor.execute(sql)
    connection.commit()

sql="select attribute_meaning from handwriting_attributes order by match_value desc limit 5"
cursor.execute(sql)
myresult = cursor.fetchall()
top1=str(myresult[0][0])
top2=str(myresult[1][0])
top3=str(myresult[2][0])
top4=str(myresult[3][0])
top5=str(myresult[4][0])

sql="update module_4 set top1='"+top1+"',top2='"+top2+"',top3='"+top3+"',top4='"+top4+"',top5='"+top5+"' where user_id='"+user+"'"
cursor.execute(sql)
connection.commit()
