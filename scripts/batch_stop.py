import pyautogui

pyautogui.PAUSE = 5

while True:
    # Click first email in list.
    pyautogui.click(640, 345)

    # Stop it
    pyautogui.click(1760, 430)
    pyautogui.click(980, 1020)
    pyautogui.typewrite("STOP")
    pyautogui.press('enter')

    pyautogui.click(580, 220)