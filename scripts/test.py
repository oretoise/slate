import pyautogui
import time

needed = 10

for x in range(needed + 1):
    y_coord = 332 + (x * 28)
    print("Moving to", y_coord)
    pyautogui.moveTo(740, y_coord)
    time.sleep(1)
